<?php

namespace App\Controller;

use App\Entity\Settings;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends AbstractController
{
    /**
     * @var array[]
     */
    private $settings;

    public function __construct() {
        $this->settings = array(
            array(
                0 => "Thème",
                1 => "fas fa-paint-brush",
                2 => "Couleur d'accentuation, thème global",
                3 => array(
                    0 => array(
                        0 => "switch",
                        1 => "Theme",
                        2 => "Thème sombre",
                        3 => "dark"
                    ),
                    1 => array(
                        0 => "switch",
                        1 => "Medieval",
                        2 => "Thème médiéval",
                        3 => true
                    )
                )
            )
        );
    }

    public function resolveSettings($settings) {
        $userSettings = array();

        if ($settings["Theme"] == "light") {
            if ($settings["Medieval"]) {
                $userSettings["theme"] = "light";
                $userSettings["color"] = "dark";
                $userSettings["medieval"] = array(true, "bg-medieval-light");
            } else {
                $userSettings["theme"] = "light";
                $userSettings["color"] = "dark";
                $userSettings["medieval"] = array(false, "");
            }
        } elseif ($settings["Theme"] == "dark") {
            if ($settings["Medieval"]) {
                $userSettings["theme"] = "dark";
                $userSettings["color"] = "light";
                $userSettings["medieval"] = array(true, "bg-medieval-dark");
            } else {
                $userSettings["theme"] = "dark";
                $userSettings["color"] = "light";
                $userSettings["medieval"] = array(false, "");
            }
        }

//        return $userSettings;
        return new JsonResponse($userSettings);
    }

    /**
     * @Route("/dashboard/settings", name="settings")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        return $this->render("dashboard/settings/index.html.twig", [
            "settings" => $this->settings,
            "userSettings" => $userSettings
        ]);
    }

    /**
     * @Route("/export/settings/save/{id}", name="settings_save")
     * @param int $id
     * @return RedirectResponse
     */
    public function saveSettings(int $id) {
        $manager = $this->getDoctrine()->getManager();

        $settingsEntity = $manager->getRepository(Settings::class)->findOneBy(["User" => $id]);
        $settings = $settingsEntity->getSettings();

        if (isset($_POST['Theme'])) {
            $settings["Theme"] = "dark";
        } else {
            $settings["Theme"] = "light";
        }

        if (isset($_POST['Medieval'])) {
            $settings["Medieval"] = true;
        } else {
            $settings["Medieval"] = false;
        }

        $settingsEntity->setSettings($settings);
        $manager->flush();

        return $this->redirectToRoute("settings");
    }

}
