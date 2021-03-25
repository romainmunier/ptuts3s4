<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/dashboard/articles", name="articles")
     * @param KernelInterface $kernel
     * @return Response
     */
    public function index(KernelInterface $kernel) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        
        $articles = $manager->getRepository(Article::class)->findAll();
        $containments = [];
        
        foreach($articles as $key => $a) {
            if (file_exists($kernel->getProjectDir() . "/public/articles/" . $a->getArticle() . ".html")) {
                $file = fopen($kernel->getProjectDir() . "/public/articles/" . $a->getArticle() . ".html", "r");

                $containments[$a->getArticle()] = fgets($file);
            }
        }
        
        return $this->render("dashboard/articles/index.html.twig", [
            "userSettings" => $userSettings,
            "articles" => $articles,
            "containments" => $containments
        ]);
    }

    /**
     * @Route("/dashboard/articles/add", name="articles_add", methods={"GET", "POST"})
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
            return $this->render("dashboard/articles/add.html.twig", [
                "userSettings" => $userSettings
            ]);
        }
    }

    /**
     * @Route("/dashboard/articles/edit/{article}", name="articles_edit", methods={"GET", "POST"})
     * @param String $article
     * @param Request $request
     * @param KernelInterface $kernel
     * @return Response
     */
    public function edit(String $article, Request $request, KernelInterface $kernel) {
        $manager = $this->getDoctrine()->getManager();

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        
        $object = $manager->getRepository(Article::class)->findOneBy(["Article" => $article]);
        $file = fopen($kernel->getProjectDir() . "/public/articles/" . $object->getArticle() . ".html", "r");
        $containment = "";
        
        while (!feof($file)) {
            $containment = $containment . fgets($file);
        }
        
        fclose($file);

        if ($request->getMethod() == "GET") {
            return $this->render("dashboard/articles/edit.html.twig", [
                "userSettings" => $userSettings,
                "article" => $object,
                "containment" => $containment
            ]);
        }
    }
    
    /**
     * @Route("/dashboard/articles/delete/{article}", name="articles_delete", methods={"GET"})
     */
    public function delete(String $article, KernelInterface $kernel) {
        $manager = $this->getDoctrine()->getManager();
        
        $object = $manager->getRepository(Article::class)->findOneBy(["Article" => $article]);
        
        unlink($kernel->getProjectDir() . "/public/articles/" . $object->getArticle() . ".html");
        
        $manager->remove($object);
        $manager->flush();
        
        return $this->redirectToRoute("articles");
    }
}
