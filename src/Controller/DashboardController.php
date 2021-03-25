<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DashboardController extends AbstractController
{

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        $count = array();
        $count["users"] = count($manager->getRepository(User::class)->findAll());

        return $this->render("dashboard/index/index.html.twig", [
            "userSettings" => $userSettings,
            "count" => $count
        ]);
    }

    /**
     * @Route("/login", name="login_if_not_connected")
     */
    public function login(AuthenticationUtils $utils) {
        return $this->render("index/login.html.twig");
    }
}
