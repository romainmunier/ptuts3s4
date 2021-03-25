<?php

namespace App\Controller;

use App\Entity\Settings;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function check($data) {
        $manager = $this->getDoctrine()->getManager();
        $errors = array();

        // Check username
        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $data["Username"]]);
        if ($user and $data["METHOD"] == "ADD") {
            $errors["Username"] = "is-invalid";
        }

        // Check password
        if (isset($data["Password"]) and $data["Password"] == "") {
            $errors["Password"] = "is-invalid";
        }

        // Check firstname
        if (!preg_match("/^[a-zA-Zéèçàùôâîêïäëöüû °-]{2,128}$/", $data["Firstname"])) {
            $errors["Firstname"] = "is-invalid";
        }

        // Check lastname
        if (!preg_match("/^[a-zA-Zéèçàùôâîêïäëöüû °-]{2,128}$/", $data["Lastname"])) {
            $errors["Lastname"] = "is-invalid";
        }

        // Check use pseudo
        if (isset($data["usePseudo"]) and $data["usePseudo"] == "on") {
            if ($data["Pseudo"] == "") {
                $errors["Pseudo"] = "is-invalid";
            }
        }

        // Check use mail
        if (isset($data["useMail"]) and $data["useMail"] == "on") {
            if ($data["Mail"] == "" or !preg_match("/^([a-zA-Z0-9-éàûô.]{2,})+[@]([a-zA-Z0-9-éàûô]{2,128})+[.]([a-zA-Z0-9-]){1,5}$/", $data["Mail"])) {
                $errors["Mail"] = "is-invalid";
            }
        }

        // Check use phone
        if (isset($data["usePhone"]) and $data["usePhone"] == "on") {
            if ($data["Phone"] == "" or !preg_match("/(^([+][0-9]{2,3})+[0-9]{9})$|^([0-9]{10}$)/", $data["Phone"])) {
                $errors["Phone"] = "is-invalid";
            }
        }

        return $errors;
    }

    /**
     * @Route("/dashboard/account", name="account", methods={"GET", "POST"})
     */
    public function index(Request $request)
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if ($request->getMethod() == "GET") {
            return $this->render("dashboard/user/account.html.twig", [
                "userSettings" => $userSettings
            ]);
        }

        $errors = $this->check($_POST);

        if (!empty($errors)) {
            return $this->render("dashboard/user/account.html.twig", [
                "userSettings" => $userSettings,
                "errors" => $errors
            ]);
        }

        $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);

        $user->setFirstname(ucfirst($_POST['Firstname']));
        $user->setLastname(strtoupper($_POST['Lastname']));

        if (isset($_POST["usePseudo"]) and $_POST["usePseudo"] == "on") {
            $user->setPseudo($_POST["Pseudo"]);
        } else {
            $user->setPseudo(NULL);
        }

        if (isset($_POST["useMail"]) and $_POST["useMail"] == "on") {
            $user->setMail($_POST["Mail"]);
        } else {
            $user->setMail(NULL);
        }

        if (isset($_POST["usePhone"]) and $_POST["usePhone"] == "on") {
            $user->setPhone($_POST["Phone"]);
        } else {
            $user->setPhone(NULL);
        }

        $manager->flush();

        return $this->redirectToRoute("account");
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
     * @Route("/dashboard/users/add", name="users_add", methods={"GET", "POST"})
     */
    public function add(Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if ($request->getMethod() == "GET") {
            return $this->render("dashboard/user/add.html.twig", [
                "userSettings" => $userSettings
            ]);
        }

        $errors = $this->check($_POST);

        if (!empty($errors)) {
            return $this->render("dashboard/user/add.html.twig", [
                "userSettings" => $userSettings,
                "errors" => $errors
            ]);
        }

        $user = new User();
        $user->setUsername($_POST["Username"])
            ->setPassword($_POST["Password"])
            ->setFirstname(ucfirst($_POST["Firstname"]))
            ->setLastname(strtoupper($_POST["Lastname"]))
            ->setPseudo(NULL)
            ->setMail(NULL)
            ->setPhone(NULL)
            ->setRoles(array("ROLE_USER"));

        $encoded = $this->encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($encoded);

        $manager->persist($user);
        $manager->flush();

        $setting = new Settings();
        $setting->setUser($user)
            ->setSettings(["Theme" => "light", "Medieval" => false]);

        $manager->persist($setting);
        $manager->flush();

        return $this->redirectToRoute("users_edit", ["id" => $user->getId()]);
    }

    /**
     * @Route("/dashboard/users/edit/{id}", name="users_edit", methods={"GET", "POST"})
     */
    public function edit(int $id, Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        $user = $manager->getRepository(User::class)->find($id);

        if (!$user) {
            return $this->redirectToRoute("ERROR_404");
        }

        if ($request->getMethod() == "GET") {
            return $this->render("dashboard/user/edit.html.twig", [
                "userSettings" => $userSettings,
                "user" => $user
            ]);
        }

        $errors = $this->check($_POST);


        if (!empty($errors)) {
            return $this->render("dashboard/user/edit.html.twig", [
                "userSettings" => $userSettings,
                "user" => $manager->getRepository(User::class)->find($id),
                "errors" => $errors
            ]);
        }

        if ($_POST["Password"] != $user->getPassword()) {
            $user->setPassword($_POST['Password']);
            $encoded = $this->encoder->encodePassword($user, $_POST['Password']);
            $user->setPassword($encoded);
        }

        $user->setFirstname(ucfirst($_POST['Firstname']));
        $user->setLastname(strtoupper($_POST['Lastname']));

        if (isset($_POST["usePseudo"]) and $_POST["usePseudo"] == "on") {
            $user->setPseudo($_POST["Pseudo"]);
        } else {
            $user->setPseudo(NULL);
        }

        if (isset($_POST["useMail"]) and $_POST["useMail"] == "on") {
            $user->setMail($_POST["Mail"]);
        } else {
            $user->setMail(NULL);
        }

        if (isset($_POST["usePhone"]) and $_POST["usePhone"] == "on") {
            $user->setPhone($_POST["Phone"]);
        } else {
            $user->setPhone(NULL);
        }

        $roles = array();
        foreach($_POST['Roles'] as $key => $r) {
            array_push($roles, $r);
        }

        $user->setRoles($roles);

        $manager->flush();

        return $this->redirectToRoute("users_edit", ["id" => $id]);
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
        return $this->redirectToRoute("users");
    }
    
    /**
     * @Route("/control/user/changeProfilePicture", name="user_changeProfilePicture", methods={"POST"})
     */
    public function changeProfilePicture(KernelInterface $kernel) {
        $target_dir = $kernel->getProjectDir() . "/public/uploads/profile/";
        $rdmName = bin2hex(random_bytes(20));
        $target_file = $target_dir . $rdmName . "." . explode(".", $_FILES["profile"]["name"])[count(explode(".", $_FILES["profile"]["name"]))-1];
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
            $manager = $this->getDoctrine()->getManager();
            $user = $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()]);
            $user->setProfile($rdmName . "." . explode(".", $_FILES["profile"]["name"])[count(explode(".", $_FILES["profile"]["name"]))-1]);
            $manager->flush();
            
            return $this->redirectToRoute("account");
        }
    }
}
