<?php

namespace App\Controller;

use App\Entity\MailingList;
use App\Entity\News;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MobileAPIController extends AbstractController
{
    /**
     * @Route("/mobile/api/pictures/post", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function postPicture(Request $request): JsonResponse
    {
        return new JsonResponse(["Response", json_decode($request->getContent(), true)["text"]]);
    }

    /**
     * @Route("/mobile/api/suivix/getpeople", methods={"GET"})
     * @param Request $request
     */
    public function getPeople(Request $request) {

    }

    /**
     * @Route("/mobile/api/suivix/setpeople", methods={"POST"})
     * @param Request $request
     */
    public function setPeople(Request $request) {

    }

    /**
     * @Route("/mobile/api/mailer/drafts", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getSMSDrafts(Request $request): JsonResponse
    {
        $manager = $this->getDoctrine()->getManager();
        $drafts = $manager->getRepository(News::class)->findBy(["Type" => "DRAFT"]);

        $json = array();

        foreach($drafts as $key => $draft) {
            $jsonDraft = [];
            $jsonDraft["id"] = $draft->getId();

            $jsonDraft["author"] = [];
            $jsonDraft["author"]["id"] = $draft->getAuthor()->getId();
            $jsonDraft["author"]["username"] = $draft->getAuthor()->getUsername();
            $jsonDraft["author"]["firstname"] = $draft->getAuthor()->getFirstname();
            $jsonDraft["author"]["lastname"] = $draft->getAuthor()->getLastname();

            $jsonDraft["mailingList"] = [];
            $jsonDraft["mailingList"]["id"] = $draft->getMailingList()->getId();
            $jsonDraft["mailingList"]["type"] = $draft->getMailingList()->getType();
            $jsonDraft["mailingList"]["name"] = $draft->getMailingList()->getName();
            $jsonDraft["mailingList"]["sumup"] = $draft->getMailingList()->getSumup();

            $jsonDraft["mailingList"]["list"] = [];
            foreach($draft->getMailingList()->getList() as $key2 => $userId) {
                $user = $manager->getRepository(User::class)->find($userId);
                $jsonUser = [];
                $jsonUser["id"] = $user->getId();
                $jsonUser["firstname"] = $user->getFirstname();
                $jsonUser["lastname"] = $user->getLastname();
                $jsonUser["username"] = $user->getUsername();
                $jsonUser["roles"] = [];

                foreach($user->getRoles() as $key2 => $role) {
                    array_push($jsonUser["roles"], $role);
                }

                $jsonUser["pseudo"] = $user->getPseudo();
                $jsonUser["mail"] = $user->getMail();
                $jsonUser["phone"] = $user->getPhone();
                $jsonUser["profile"] = $user->getProfile();

                array_push($jsonDraft["mailingList"]["list"], $jsonUser);
            }

            $jsonDraft["title"] = $draft->getTitle();
            $jsonDraft["containment"] = $draft->getContainment();
            $jsonDraft["date"] = $draft->getDate();
            $jsonDraft["type"] = $draft->getType();

            array_push($json, $jsonDraft);
        }

        return new JsonResponse($json);
    }

    /**
     * @Route("/mobile/api/users/get", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getUsers(Request $request): JsonResponse
    {
        $manager = $this->getDoctrine()->getManager();
        $users = $manager->getRepository(User::class)->findAll();

        $json = array();

        foreach($users as $key => $user) {
            $jsonUser = [];
            $jsonUser["id"] = $user->getId();
            $jsonUser["firstname"] = $user->getFirstname();
            $jsonUser["lastname"] = $user->getLastname();
            $jsonUser["username"] = $user->getUsername();
            $jsonUser["roles"] = [];

            foreach($user->getRoles() as $key2 => $role) {
                array_push($jsonUser["roles"], $role);
            }

            $jsonUser["pseudo"] = $user->getPseudo();
            $jsonUser["mail"] = $user->getMail();
            $jsonUser["phone"] = $user->getPhone();
            $jsonUser["profile"] = $user->getProfile();

            array_push($json, $jsonUser);
        }

        return new JsonResponse($json);
    }

    /**
     * @Route("/mobile/api/users/post", methods={"POST"})
     * @param Request $request
     */
    public function setUsers(Request $request) {

    }
}