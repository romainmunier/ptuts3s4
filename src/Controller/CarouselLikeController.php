<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\CarouselLike;
use App\Entity\User;
use App\Form\CarouselLikeFormType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarouselLikeController extends AbstractController
{

    private FileUploader $fileUploader;
    private ?object $entityManager;

    public function __construct(FileUploader $fileUploader, EntityManagerInterface $entityManager)
    {
        $this->fileUploader = $fileUploader;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/admin/{page}/carousel/add/", name="admin_carousel_add")
     * @Route("/admin/{page}/carousel/edit/{id}", name="admin_carousel_edit")
     * @param null $page
     * @param Request $request
     * @param CarouselLike|null $carousel
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function carouselHandle($page, Request $request, CarouselLike $carousel = null): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        $view = "edit";
        if (!$carousel) {
            $view = "add";
            $carousel = new CarouselLike();
        }

        $form = $this->createForm(CarouselLikeFormType::class, $carousel, array('attr' => [$page]));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $carousel->setType($page);

            $this->entityManager->persist($carousel);
            $this->entityManager->flush();

            $this->addFlash('success',($view == "edit" ? 'éditée' : 'ajoutée') . ' avec succès');
            if ($page == 'index') {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
                $carousels = $this->getDoctrine()->getRepository(CarouselLike::class)->findAll();
                return $this->render('index/index.html.twig', [
                    'userSettings' => $userSettings,
                    'articles' => $articles,
                    'carousels' => $carousels
                ]);
            }

            return $this->render($page, [
                'userSettings' => $userSettings
            ]);
        }

        return $this->render('carousel/handle.html.twig', [
            'form' => $form->createView(),
            'view' => $view,
            'page' => $page
        ]);
    }

    /**
     * @Route("/admin/{page}/carousel/delete/{id}", name="admin_carousel_delete")
     * @param $page
     * @param CarouselLike $carousel
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function carouselDelete($page,CarouselLike $carousel): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        if (!$carousel) {
            throw $this->createNotFoundException("Ce carousel n'existe pas");
        }

        $medias = $carousel->getMedias();
        for($i = 0;$i<count($medias);$i++) {
            unlink($this->getParameter('carousel').'/'.$page.'/'.$medias[$i]->getpath());
        }

        $this->entityManager->remove($carousel);
        $this->entityManager->flush();

        $this->addFlash('success', 'Carousel supprimé avec succès');
        if ($page == 'index') {
            $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
            $carousels = $this->getDoctrine()->getRepository(CarouselLike::class)->findAll();
            return $this->render('index/index.html.twig', [
                'userSettings' => $userSettings,
                'articles' => $articles,
                'carousels' => $carousels
            ]);
        }

        return $this->render($page, [
            'userSettings' => $userSettings
        ]);
    }
}
