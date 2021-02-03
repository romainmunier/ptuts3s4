<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\CarouselLike;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     * @return Response
     */
    public function index()
    {
        $carousels = $this->getDoctrine()->getRepository(CarouselLike::class)->findAll();
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $this->render('index/index.html.twig', [
            'carousels' => $carousels,
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/fastlogin", name="login")
     * @param AuthenticationUtils $auth
     * @return RedirectResponse
     */
    public function login(AuthenticationUtils $auth) {
        return $this->redirectToRoute("index");
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {

    }

    /**
     * @Route("/register", name="register")
     */
    public function register() {
        return $this->render("index/register.html.twig");
    }
}
