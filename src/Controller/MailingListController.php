<?php

namespace App\Controller;

use App\Entity\MailingList;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailingListController extends AbstractController
{
    function check($data) {
        $errors = array();

        if ($data["Name"] == "" or !preg_match("/^[a-zA-Z0-9éèçàùôâîêïäëöüû °-]{2,128}$/", $data["Name"])) {
            $errors["Name"] = "is-invalid";
        }

        if (isset($data["useSumup"]) and ($data["Sumup"] == "")) {
            $errors["Sumup"] = "is-invalid";
        }

        if (!in_array($data["Type"], ["HYBRID", "MAIL", "PHONE"])) {
            $errors["Type"] = "is-invalid";
        }

        if (!isset($data["Users"]) or empty($data["Users"])) {
            $errors["Users"] = "is-invalid";
        }

        return $errors;
    }

    /**
     * @Route("/dashboard/mailing", name="mailing")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        $lists = $manager->getRepository(MailingList::class)->findBy([], ["Type" => "ASC", "Name" => "ASC", "Date" => "ASC"]);
        $lPhone = array();
        $lMail = array();
        $lHybrid = array();

        foreach($lists as $key => $l) {
            $a = array(
                "id" => $l->getId(),
                "Name" => $l->getName(),
                "Sumup" => $l->getSumup(),
                "Date" => $l->getDate(),
                "Type" => $l->getType(),
                "List" => $l->getList()
            );

            switch ($l->getType()) {
                case "HYBRID":
                    $a["Color"] = "success";
                    array_push($lHybrid, $a);
                    break;
                case "MAIL":
                    $a["Color"] = "warning";
                    array_push($lMail, $a);
                    break;
                case "PHONE":
                    $a["Color"] = "primary";
                    array_push($lPhone, $a);
                    break;
            }
        }

        $mailing = array();
        $mailing["HYBRID"] = array("Listes hybrides", $lHybrid);
        $mailing["MAIL"] = array("Listes de mails", $lMail);
        $mailing["PHONE"] = array("Listes de téléphones", $lPhone);

        return $this->render("dashboard/mailinglist/index.html.twig", [
            "userSettings" => $userSettings,
            "mailingList" => $mailing
        ]);
    }

    /**
     * @Route("/dashboard/mailing/add", name="mailing_add", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function add(Request $request) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if ($request->getMethod() == "GET") {
            $users = $manager->getRepository(User::class)->findAll();
            $list = array();
            foreach($users as $key => $u) {
                $a = new User();
                $a->setId($u->getId())
                    ->setFirstname($u->getFirstname())
                    ->setLastname($u->getLastname())
                    ->setPhone($u->getPhone())
                    ->setMail($u->getMail());

                array_push($list, $a);
            }

            return $this->render("dashboard/mailinglist/add.html.twig", [
                "userSettings" => $userSettings,
                "users" => $list
            ]);
        }

        $errors = $this->check($_POST);

        if (!empty($errors)) {
            $users = $manager->getRepository(User::class)->findAll();
            $list = array();
            foreach($users as $key => $u) {
                $a = new User();
                $a->setId($u->getId())
                    ->setFirstname($u->getFirstname())
                    ->setLastname($u->getLastname())
                    ->setPhone($u->getPhone())
                    ->setMail($u->getMail());

                array_push($list, $a);
            }

            return $this->render("dashboard/mailinglist/add.html.twig", [
                "userSettings" => $userSettings,
                "users" => $list,
                "errors" => $errors,
                "data" => $_POST
            ]);
        }

        $mailing = new MailingList();
        $mailing->setName($_POST["Name"])
            ->setSumup($_POST["Sumup"])
            ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
            ->setType($_POST["Type"])
            ->setList($_POST["Users"]);

        if ($_POST["Sumup"] != "") {
            $mailing->setSumup($_POST["Sumup"]);
        } else {
            $mailing->setSumup(NULL);
        }

        $manager->persist($mailing);
        $manager->flush();

        $this->addFlash("info-mailing", "Votre liste a été crée avec succès !");
        return $this->redirectToRoute("mailing");
    }

    /**
     * @Route("/dashboard/mailing/show/{id}", name="mailing_show", methods={"GET"})
     */
    public function show(int $id) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        $users = $manager->getRepository(User::class)->findAll();
        $mailing = $manager->getRepository(MailingList::class)->find($id);
        $list = array();
        foreach($users as $key => $u) {
            $a = new User();
            $a->setId($u->getId())
                ->setFirstname($u->getFirstname())
                ->setLastname($u->getLastname())
                ->setPhone($u->getPhone())
                ->setMail($u->getMail());

            array_push($list, $a);
        }

        return $this->render("dashboard/mailinglist/show.html.twig", [
            "userSettings" => $userSettings,
            "mailing" => $mailing,
            "users" => $users
        ]);
    }

    /**
     * @Route("/dashboard/mailing/edit/{id}", name="mailing_edit", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, int $id) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if ($request->getMethod() == "GET") {
            $users = $manager->getRepository(User::class)->findAll();
            $mailing = $manager->getRepository(MailingList::class)->find($id);
            $list = array();
            foreach($users as $key => $u) {
                $a = new User();
                $a->setId($u->getId())
                    ->setFirstname($u->getFirstname())
                    ->setLastname($u->getLastname())
                    ->setPhone($u->getPhone())
                    ->setMail($u->getMail());

                array_push($list, $a);
            }

            return $this->render("dashboard/mailinglist/edit.html.twig", [
                "userSettings" => $userSettings,
                "users" => $list,
                "mailing" => $mailing
            ]);
        }

        $errors = $this->check($_POST);

        if (!empty($errors)) {
            $users = $manager->getRepository(User::class)->findAll();
            $list = array();
            foreach($users as $key => $u) {
                $a = new User();
                $a->setId($u->getId())
                    ->setFirstname($u->getFirstname())
                    ->setLastname($u->getLastname())
                    ->setPhone($u->getPhone())
                    ->setMail($u->getMail());

                array_push($list, $a);
            }

            return $this->render("dashboard/mailinglist/edit.html.twig", [
                "userSettings" => $userSettings,
                "users" => $list,
                "errors" => $errors,
                "data" => $_POST
            ]);
        }

        $mailing = $manager->getRepository(MailingList::class)->find($id);
        $mailing->setName($_POST["Name"])
            ->setSumup($_POST["Sumup"])
            ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
            ->setType($_POST["Type"])
            ->setList($_POST["Users"]);

        if ($_POST["Sumup"] != "") {
            $mailing->setSumup($_POST["Sumup"]);
        } else {
            $mailing->setSumup(NULL);
        }

        $manager->flush();

        $this->addFlash("info-mailing", "Votre liste a été modifiée avec succès !");
        return $this->redirectToRoute("mailing");
    }

    /**
     * @Route("/control/admin/mailing/delete/{id}", name="mailing_delete", methods={"GET"})
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id) {
        $manager = $this->getDoctrine()->getManager();

        $list = $manager->getRepository(MailingList::class)->find($id);
        if (!$list) {
            $this->addFlash("error", "Impossible de supprimer cette liste, elle n'existe pas dans la base de données.");
            return $this->redirectToRoute("mailing");
        }
        $manager->remove($list);
        $manager->flush();

        $this->addFlash("info-mailing", "Liste supprimée avec succès !");
        return $this->redirectToRoute("mailing");
    }
}
