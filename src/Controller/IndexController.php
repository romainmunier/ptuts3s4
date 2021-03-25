<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\CarouselLike;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Mime\Email;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function index(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('romain-munier@orange.fr')
            ->to('romain.munier90@outlook.fr')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('TEST')
            ->text('TEST')
            ->html('<p>COUCOU <b>BG !</b></p>');

        $mailer->send($email);
        
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
