<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\MailingList;
use App\Entity\News;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Json;

class APIController extends AbstractController
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    /**
     * @Route("/api/checkoldpassword", name="check_oldpassword", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
     public function checkOldPassword(Request $request) {
         $manager = $this->getDoctrine()->getManager();

         $password = json_decode($request->getContent(), true)["Password"];
         $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

         if ($this->encoder->encodePassword($user, strval($password)) === $user->getPassword()) {
             return new JsonResponse(["same" => "TRUE"]);
         } else {
             return new JsonResponse(["same" => "FALSE"]);
         }
     }

    /**
     * @Route("/api/updatepassword", name="updatepassword", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function updatePassword(Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $oldpassword = json_decode($request->getContent(), true)["OldPassword"];
        $newpassword = json_decode($request->getContent(), true)["NewPassword"];
        $confirmpassword = json_decode($request->getContent(), true)["ConfirmPassword"];

        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

        if ($this->encoder->encodePassword($user, $oldpassword) === $user->getPassword()) {
            if ($newpassword === $confirmpassword) {
                $user->setPassword($newpassword);
                $encoded = $this->encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($encoded);

                $manager->flush();

                return new JsonResponse(["error" => "NULL"]);
            } else {
                return new JsonResponse(["error" => "ERROR_BADCONFIRMATION"]);
            }
        } else {
            return new JsonResponse(["error" => "ERROR_BADPASSWD"]);
        }
    }

    /**
     * @Route("/api/checkusername", name="check_username", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function checkUsername(Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $username = json_decode($request->getContent(), true)["Username"];

        $results = $manager->getRepository(User::class)->findBy(["Username" => $username]);

        if (empty($results)) {
            return new JsonResponse(["used" => "FALSE"]);
        } else {
            return new JsonResponse(["used" => "TRUE"]);
        }
    }

    /**
     * @Route("/api/getCategoryByValue", name="get_category", methods={"POST"})
     */
    public function getCategory(Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $value = json_decode($request->getContent(), true)["value"];

        $results = $manager->getRepository(Category::class)->findByValue($value);

        return new JsonResponse($results);
    }
    
    /**
     * @Route("/api/storeArticle", name="store_article", methods={"POST"})
     */
    public function storeArticle(Request $request, KernelInterface $kernel) {
        $manager = $this->getDoctrine()->getManager();
        
        $title = json_decode($request->getContent(), true)["title"];
        $containment = json_decode($request->getContent(), true)["article"];
        $categoryId = intval(json_decode($request->getContent(), true)["category"]);
        $category = $manager->getRepository(Category::class)->find($categoryId);
        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);
        
        $articleName = bin2hex(random_bytes(20));
        
        if ($title == "") {
            return new JsonResponse("TITLE MISSING");
        } else {
            $article = new Article();
            $article->setAuthor($user)
                ->setSubject($title)
                ->setArticle($articleName)
                ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
                ->setVisibility(true)
                ->setCategory($category);

            $file = fopen($kernel->getProjectDir() . "/public/articles/" . $articleName . ".html", "w+");
            fwrite($file, $containment);
            fclose($file);

            $manager->persist($article);
            $manager->flush();

            return new JsonResponse("OK");
        }
    }

    /**
     * @Route("/api/saveArticle", name="save_article", methods={"POST"})
     */
    public function saveArticle(Request $request, KernelInterface $kernel) {
        $manager = $this->getDoctrine()->getManager();

        $title = json_decode($request->getContent(), true)["title"];
        $containment = json_decode($request->getContent(), true)["article"];
        $id = json_decode($request->getContent(), true)["id"];
        $categoryId = intval(json_decode($request->getContent(), true)["category"]);
        $category = $manager->getRepository(Category::class)->find($categoryId);
        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

        $article = $manager->getRepository(Article::class)->findOneBy(["Article" => $id]);

        if ($title == "") {
            return new JsonResponse("TITLE MISSING");
        } else {
            $article->setAuthor($user)
                ->setSubject($title)
                ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
                ->setVisibility(true)
                ->setCategory($category);

            $file = fopen($kernel->getProjectDir() . "/public/articles/" . $id . ".html", "w+");
            fwrite($file, $containment);
            fclose($file);
            
            $manager->flush();

            return new JsonResponse("OK");
        }
    }

    /**
     * @Route("/api/saveMail", name="save_mail", methods={"POST"})
     * @param Request $request
     * @param KernelInterface $kernel
     * @return JsonResponse
     */
    public function saveMail(Request $request, KernelInterface $kernel): JsonResponse
    {
        $manager = $this->getDoctrine()->getManager();

        $title = json_decode($request->getContent(), true)["title"];
        $list = json_decode($request->getContent(), true)["mailing"];
        $mailingList = $manager->getRepository(MailingList::class)->find(intval($list));
        $message = json_decode($request->getContent(), true)["containment"];
        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

        $news = new News();
        $news->setTitle($title)
            ->setMailingList($mailingList)
            ->setAuthor($user)
            ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
            ->setType("DRAFT")
            ->setContainment($message);

        $manager->persist($news);
        $manager->flush();

        return new JsonResponse("OK");
    }

    /**
     * @Route("/api/editMail", name="edit_mail", methods={"POST"})
     * @param Request $request
     * @param KernelInterface $kernel
     * @return JsonResponse
     */
    public function editMail(Request $request, KernelInterface $kernel): JsonResponse
    {
        $manager = $this->getDoctrine()->getManager();

        $title = json_decode($request->getContent(), true)["title"];
        $list = json_decode($request->getContent(), true)["mailing"];
        $mailingList = $manager->getRepository(MailingList::class)->find(intval($list));
        $message = json_decode($request->getContent(), true)["containment"];
        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

        $news = $manager->getRepository(News::class)->find(json_decode($request->getContent(), true)["id"]);
        $news->setTitle($title)
            ->setMailingList($mailingList)
            ->setAuthor($user)
            ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
            ->setType("DRAFT")
            ->setContainment($message);
        
        $manager->flush();

        return new JsonResponse("OK");
    }
}
