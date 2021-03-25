<?php

namespace App\Controller;

use App\Entity\MailingList;
use App\Entity\News;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
    public function add(): Response
    {
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

    /**
     * @Route("/dashboard/news/edit/{id}", name="news_edit", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        $mailinglists = $manager->getRepository(MailingList::class)->findAll();
        $message = $manager->getRepository(News::class)->find($id);

        return $this->render("dashboard/news/edit.html.twig", [
            "userSettings" => $userSettings,
            "mailings" => $mailinglists,
            "message" => $message
        ]);
    }
    
    /**
     * @Route("/dashboard/news/delete/{id}", name="news_delete", methods={"GET"})
     */
    public function delete(int $id) {
        $manager = $this->getDoctrine()->getManager();
        
        $news = $manager->getRepository(News::class)->find($id);
        $manager->remove($news);
        $manager->flush();
        
        return $this->redirectToRoute("news");
    }
}
