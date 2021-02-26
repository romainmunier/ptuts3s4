<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Media;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/dashboard/gallery", name="gallery")
     * @return Response
     */
    public function displayAll() {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('dashboard/gallery/index.html.twig',[
            'categories' => $categories,
            'userSettings' => $userSettings
        ]);
    }

    /**
     * @Route("/dashboard/gallery/{id}", name="gallery_media")
     * @param int|null $id
     * @return Response
     */
    public function displayByCat(int $id = null) {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        $categories = $this->getDoctrine()->getRepository(Category::class)->find($id);
        return $this->render('dashboard/gallery/details.html.twig',[
            'categories' => $categories,
            'userSettings' => $userSettings
        ]);
    }
}
