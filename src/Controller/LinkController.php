<?php

namespace App\Controller;

use App\Entity\CategoryLink;
use App\Entity\Link;
use App\Form\CategoryLinkFormType;
use App\Form\LinkFormType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LinkController extends AbstractController
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/admin/{page}/link/add/", name="admin_link_add")
     * @Route("/admin/{page}/link/edit/{id}", name="admin_link_edit")
     * @param null $page
     * @param Request $request
     * @param Link|null $link
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function linkHandle($page, Request $request, Link $link = null): Response
    {

        $view = "edit";
        if (!$link) {
            $view = "add";
            $link = new Link();
        }

        $form = $this->createForm(LinkFormType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($link);
            $this->manager->flush();

            $this->addFlash('success',($view == "edit" ? 'éditée' : 'ajoutée') . ' avec succès');
            return $this->redirectToRoute($page);
        }

        return $this->render('mailer/handle.html.twig', [
            'form' => $form->createView(),
            'view' => $view
        ]);
    }

    /**
     * @Route(path="/admin/{page}/link/delete/{id}", name="admin_link_delete")
     * @param $page
     * @param Link $link
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function linkDelete($page, Link $link): Response
    {
        if (!$link) {
            $this->createNotFoundException("Ce lien n'existe pas");
        }

        $this->manager->remove($link);
        $this->manager->flush();

        return $this->redirectToRoute($page);
    }

    /**
     * @Route("/admin/{page}/catlink/add/", name="admin_catlink_add")
     * @Route("/admin/{page}/catlink/edit/{id}", name="admin_catlink_edit")
     * @param null $page
     * @param Request $request
     * @param Link|null $link
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function catLinkHandle($page, Request $request, Link $link = null): Response
    {

        $view = "edit";
        if (!$link) {
            $view = "add";
            $link = new CategoryLink();
        }

        $form = $this->createForm(CategoryLinkFormType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($link);
            $this->manager->flush();

            $this->addFlash('success',($view == "edit" ? 'éditée' : 'ajoutée') . ' avec succès');
            return $this->redirectToRoute($page);
        }

        return $this->render('categorylink/handle.html.twig', [
            'form' => $form->createView(),
            'view' => $view
        ]);
    }

    /**
     * @Route(path="/admin/{page}/catlink/delete/{id}", name="admin_catlink_delete")
     * @param $page
     * @param Link $link
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function deleteCat($page, Link $link): Response
    {
        if (!$link) {
            $this->createNotFoundException("Ce lien n'existe pas");
        }

        $this->manager->remove($link);
        $this->manager->flush();

        return $this->redirectToRoute($page);
    }
}
