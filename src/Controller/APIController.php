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
     * @Route("/api/register", name="register", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $error = [];
        $data = json_decode($request->getContent(), true);

        if (!(strlen($data['Firstname']) >= 2) or !(strlen($data['Firstname']) <= 128) or !is_string($data['Firstname'])) {
            array_push($error, ["Firstname" => "BAD_LENGTH_OR_BAD_TYPE"]);
        }

        if (!(strlen($data['Lastname']) >= 2) or !(strlen($data['Lastname']) <= 128) or !is_string($data['Lastname'])) {
            array_push($error, ["Lastname" => "BAD_LENGTH_OR_BAD_TYPE"]);
        }

        if (!(strlen($data['Username']) >= 2) or !(strlen($data['Username']) <= 128) or !is_string($data['Username'])) {
            array_push($error, ["Username" => "BAD_LENGTH_OR_BAD_TYPE"]);
        }

        if (!(strlen($data['Password']) >= 4) or !(strlen($data['Password']) <= 128)) {
            array_push($error, ["Password" => "BAD_LENGTH"]);
        }

        if (empty($error)) {
            if (empty($manager->getRepository(User::class)->findBy(["Username" => $data["Username"]]))) {
                $user = new User();
                $user->setFirstname(ucfirst($data['Firstname']))
                    ->setLastname(strtoupper($data['Lastname']))
                    ->setUsername($data['Username'])
                    ->setPassword($data['Password'])
                    ->setRoles(["ROLE_USER"]);

                $encoded = $this->encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($encoded);
    
                $manager->persist($user);
                $manager->flush();
            }

        }

        return new JsonResponse($error);
    }
}
