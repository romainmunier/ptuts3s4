<?php

namespace App\Controller;

use App\Entity\CarouselLike;
use App\Form\CarouselLikeFormType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarouselLikeController extends AbstractController
{

    private FileUploader $fileUploader;
    private ?object $entityManager;

    public function __construct(FileUploader $fileUploader, EntityManagerInterface $entityManager)
    {
        $this->fileUploader = $fileUploader;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/admin/{page}/carousel/add/", name="admin_carousel_add")
     * @Route("/admin/{page}/carousel/edit/{id}", name="admin_carousel_edit")
     * @param null $page
     * @param Request $request
     * @param CarouselLike|null $carousel
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function carouselHandle($page, Request $request, CarouselLike $carousel = null): Response
    {
        $view = "edit";
        if (!$carousel) {
            $view = "add";
            $carousel = new CarouselLike();
        }

        $form = $this->createForm(CarouselLikeFormType::class, $carousel, array('attr' => [$page]));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $carousel->setType($page);

            $this->entityManager->persist($carousel);
            $this->entityManager->flush();

            $this->addFlash('success',($view == "edit" ? 'éditée' : 'ajoutée') . ' avec succès');
            return $this->redirectToRoute($page);
        }

        return $this->render('carousel/handle.html.twig', [
            'form' => $form->createView(),
            'view' => $view,
            'page' => $page
        ]);
    }

    /**
     * @Route("/admin/{page}/carousel/delete/{id}", name="admin_carousel_delete")
     * @param $page
     * @param CarouselLike $carousel
     * @return Response
     * @IsGranted("ROLE_DEVELOPERS")
     */
    public function carouselDelete($page,CarouselLike $carousel): Response
    {

        if (!$carousel) {
            throw $this->createNotFoundException("Ce carousel n'existe pas");
        }

        $medias = $carousel->getMedias();
        for($i = 0;$i<count($medias);$i++) {
            unlink($this->getParameter('carousel').'/'.$page.'/'.$medias[$i]->getpath());
        }

        $this->entityManager->remove($carousel);
        $this->entityManager->flush();

        $this->addFlash('success', 'Carousel supprimé avec succès');
        return $this->redirectToRoute($page);
    }
}
