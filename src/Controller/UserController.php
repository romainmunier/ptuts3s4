<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/dashboard/account", name="account")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        return $this->render("dashboard/user/account.html.twig", [
            "userSettings" => $userSettings
        ]);
    }

    /**
     * @Route("/dashboard/users", name="users")
     */
    public function users() {
        if (!$this->isGranted("ROLE_DEVELOPERS")) return $this->redirectToRoute("ERROR_401");

        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if (isset($_POST['SEARCH'])) {
            $userList = $manager->getRepository(User::class)->search($_POST['SEARCH']);
        } else {
            $userList = $manager->getRepository(User::class)->findBy([], ["Lastname" => "ASC", "Firstname" => "ASC"]);
        }

        $data = array();
        $part = array();

        $limit = 10;
        $count = 0;

        if (isset($_POST['limit'])) {
            $limit = intval($_POST['limit']);
        }

        foreach($userList as $key => $u) {
            if (count($part) < $limit) {
                $d = array(
                    "id" => $u->getId(),
                    "username" => $u->getUsername(),
                    "firstname" => $u->getFirstname(),
                    "lastname" => $u->getLastname(),
                    "pseudo" => $u->getPseudo()
                );

                array_push($part, $d);
            } else {
                array_push($data, $part);
                $part = array();

                $d = array(
                    "id" => $u->getId(),
                    "username" => $u->getUsername(),
                    "firstname" => $u->getFirstname(),
                    "lastname" => $u->getLastname(),
                    "pseudo" => $u->getPseudo()
                );

                array_push($part, $d);
            }
            $count++;
        }

        array_push($data, $part);

        return $this->render("dashboard/user/index.html.twig", [
            "userSettings" => $userSettings,
            "data" => $data,
            "limit" => $limit,
            "count" => $count
        ]);
    }

    /**
     * @Route("/control/admin/users/delete/{id}", name="user_delete", methods={"GET"})
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id) {
        $manager = $this->getDoctrine()->getManager();

        $user = $manager->getRepository(User::class)->find($id);
        if (!$user) {
            $this->addFlash("error", "Impossible de supprimer cet utilisateur, il n'existe pas dans la base de données.");
            return $this->redirectToRoute("users");
        }
        $manager->remove($user);
        $manager->flush();

        $this->addFlash("user", "Utilisateur supprimé avec succès !");
        return $this->redirectToRoute("users");
    }

    /**
     * @Route("/control/admin/users/executeAction", name="user_executeAction", methods={"GET", "POST"})
     */
    public function executeAction() {
        $manager = $this->getDoctrine()->getManager();

        if (isset($_POST["action"], $_POST["selected"])) {
            switch ($_POST["action"]) {
                case "DELETE":
                    foreach($_POST["selected"] as $key => $u) {
                        $userid = array_keys($u)[0];
                        $user = $manager->getRepository(User::class)->find($userid);
                        $manager->remove($user);
                        $manager->flush();
                    }

                    $this->addFlash("user", "Les utilisateurs sélectionnés ont été supprimés avec succès !");
                    return $this->redirectToRoute("users");
                default:
                    return $this->redirectToRoute("users");
            }
        }
    }
}
