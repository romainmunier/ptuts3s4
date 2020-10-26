<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
}
