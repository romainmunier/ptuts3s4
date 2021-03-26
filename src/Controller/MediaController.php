<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\CarouselLike;
use App\Entity\Media;
use App\Entity\User;
use App\Form\MediaFormType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MediaController extends AbstractController
{
    private $manager;
    private $fileUploader;

    public function __construct(EntityManagerInterface $manager, FileUploader $fileUploader)
    {
        $this->manager = $manager;
        $this->fileUploader = $fileUploader;
    }

    /**
     * @Route("/admin/{page}/medias/add/{id}", name="medias_add")
     * @param $page
     * @param Request $request
     * @param CarouselLike $carouselLike
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function addMediaPage($page, Request $request, CarouselLike $carouselLike): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        if (!$carouselLike) {
            $this->createNotFoundException();
        }
        $form = $this->createForm(MediaFormType::class, null, array('attr' => [$page]));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->fileUploader->setTargetDirectory($this->getParameter('carousel_'.$page));
            if ($page == 'index') {
                $mediaEntity = new Media();
                $filePath = $this->fileUploader->upload($form->get('medias')->getData());
                $mediaEntity->setPath($filePath)
                    ->setType($this->fileUploader->getType($filePath))
                    ->setCarouselLike($carouselLike)
                    ->setCategory(NULL);
                if($form->has('title')) {
                    $mediaEntity->setTitle($form->get('title')->getData())
                        ->setDescription($form->get('description')->getData());
                }

                $this->manager->persist($mediaEntity);
                $this->manager->flush();
            } else {
                foreach ($form->get('medias')->getData() as $media) {
                    $mediaEntity = new Media();
                    $filePath = $this->fileUploader->upload($media);
                    $mediaEntity->setPath($filePath)
                        ->setType($this->fileUploader->getType($filePath))
                        ->setCarouselLike(NULL)
                        ->setCategory(NULL);
                    if($form->has('title')) {
                        $mediaEntity->setTitle($form->get('title')->getData())
                            ->setDescription($form->get('description')->getData());
                    }

                    $this->manager->persist($mediaEntity);
                    $this->manager->flush();
                }
            }
            if ($page == 'index') {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
                $carousels = $this->getDoctrine()->getRepository(CarouselLike::class)->findAll();
                return $this->render('index/index.html.twig', [
                    'userSettings' => $userSettings,
                    'articles' => $articles,
                    'carousels' => $carousels
                ]);
            }
            return $this->redirectToRoute($page);
        }

        return $this->render('media/handle.twig', [
            'form' => $form->createView(),
            'carousel' => $carouselLike,
            'userSettings' => $userSettings
        ]);
    }

    /**
     * @Route("/admin/{page}/medias/delete/{id}", name="medias_delete")
     * @param $page
     * @param Media $media
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function deleteMediaPage($page, Media $media): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        if (!$media) {
            $this->createNotFoundException("Ce média n'existe pas");
        }
        unlink($this->getParameter('carousel').$page.'/'.$media->getpath());

        $this->manager->remove($media);
        $this->manager->flush();
        if ($page == 'index') {
            $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
            $carousels = $this->getDoctrine()->getRepository(CarouselLike::class)->findAll();
            return $this->render('index/index.html.twig', [
                'userSettings' => $userSettings,
                'articles' => $articles,
                'carousels' => $carousels
            ]);
        }
        return $this->redirectToRoute($page);
    }

    /**
     * @Route("/dashboard/gallery/media/add", name="medias_add_gallery")
     * @param Request $request
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function addMediaFromGallery(Request $request): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        $form = $this->createForm(MediaFormType::class, null, array('attr' => ['gallery']));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->fileUploader->setTargetDirectory($this->getParameter('gallery'));
            foreach ($form->get('medias')->getData() as $media) {
                $mediaEntity = new Media();
                $filePath = $this->fileUploader->upload($media);
                $mediaEntity->setPath($filePath)
                    ->setType($this->fileUploader->getType($filePath))
                    ->setCarouselLike(NULL)
                    ->setTitle($form->get('title')->getData())
                    ->setDescription($form->get('description')->getData())
                    ->setCategory($form->get('category')->getData());
                $this->manager->persist($mediaEntity);
                $this->manager->flush();
            }

            return $this->redirectToRoute('gallery_media',["id" => $mediaEntity->getCategory()->getId()]);
        }

        return $this->render('media/handle.twig', [
            'form' => $form->createView(),
            'userSettings' => $userSettings
        ]);
    }

    /**
     * @Route("/dashboard/gallery/media/delete/{id}", name="medias_delete_gallery")
     * @param Media $media
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function deleteMediaFromGallery(Media $media): Response
    {
        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $this->getDoctrine()->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);
        $userSettings = json_decode($userSettings->getContent(), true);

        if (!$media) {
            $this->createNotFoundException("Ce média n'existe pas");
        }
        unlink($this->getParameter('gallery').$media->getpath());

        $this->manager->remove($media);
        $this->manager->flush();

        return $this->redirectToRoute('gallery_media',[
            "id" => $media->getCategory()->getId(),
            "userSettings" => $userSettings
            ]);
    }
}
