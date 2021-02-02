<?php

namespace App\Controller;

use App\Entity\CarouselLike;
use App\Entity\Media;
use App\Entity\Title;
use App\Form\MediaFormType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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

    // @Route("/admin/{page}/medias/upload/{id}", name="medias_upload")

    /**
     * @Route("/admin/{page}/medias/add/{id}", name="medias_add")
     * @Route(path="/admin/{page}/medias/upload/{id}", name="medias_upload")
     * @param $page
     * @param Request $request
     * @param CarouselLike $carouselLike
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function add($page, Request $request, CarouselLike $carouselLike): Response
    {
        if (!$carouselLike) {
            $this->createNotFoundException();
        }
        $form = $this->createForm(MediaFormType::class, null, array('attr' => [$page]));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->fileUploader->setTargetDirectory($this->getParameter($page));
            if ($page == 'accueil') {
                $mediaEntity = new Media();
                $filePath = $this->fileUploader->upload($form->get('medias')->getData());
                $mediaEntity->setPath($filePath)
                    ->setType($this->fileUploader->getType($filePath))
                    ->setCarouselLike($carouselLike);
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
                        ->setCarouselLike($carouselLike);
                    if($form->has('title')) {
                        $mediaEntity->setTitle($form->get('title')->getData())
                            ->setDescription($form->get('description')->getData());
                    }

                    $this->manager->persist($mediaEntity);
                    $this->manager->flush();
                }
            }
            return $this->redirectToRoute($page);
        }

        return $this->render('media/handle.twig', [
            'form' => $form->createView(),
            'carousel' => $carouselLike,
        ]);
    }

    /**
     * @Route(path="/admin/{page}/medias/delete/{id}", name="medias_delete")
     * @param $page
     * @param Media $media
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete($page, Media $media): Response
    {
        if (!$media) {
            $this->createNotFoundException("Ce média n'existe pas");
        }
        unlink($this->getParameter('unlinkmedia').'/'.$page.'/'.$media->getpath());

        $this->manager->remove($media);
        $this->manager->flush();

        return $this->redirectToRoute($page);
    }
}
