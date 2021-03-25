<?php

namespace App\Controller;

use App\Entity\MailingList;
use App\Entity\News;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/dashboard/news", name="news")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        
        $news = $manager->getRepository(News::class)->findAll();

        return $this->render("dashboard/news/index.html.twig", [
            "userSettings" => $userSettings,
            "news" => $news
        ]);
    }
    
    /**
     * @Route("/dashboard/news/add", name="news_add")
     */
    public function add() {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        
        $mailinglists = $manager->getRepository(MailingList::class)->findAll();

        return $this->render("dashboard/news/add.html.twig", [
            "userSettings" => $userSettings,
            "mailings" => $mailinglists
        ]);
    }
}
