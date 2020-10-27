<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/fastlogin", name="login")
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
