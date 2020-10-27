<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    /**
     * @Route("/401", name="ERROR_401")
     */
    public function ERROR401() {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        return $this->render("dashboard/errors/401.html.twig", [
            "userSettings" => $userSettings
        ]);
    }
}
