<?php

namespace App\Controller;

use App\Entity\Log;
use App\Repository\LogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogController extends AbstractController
{
    /**
     * @Route("/log", name="log")
     * @param LogRepository $logRepository
     * @return Response
     */
    public function index(LogRepository $logRepository)
    {
        return $this->render('dashboard/log/index.html.twig', [
            'logs' => $logs = $logRepository->findAll()
        ]);
    }

    public function addLog($username,$date,$action,$page,$name,$value) {
        $manager = $this->getDoctrine()->getManager();

        $log = new Log();

        $log->setDate($date)
            ->setUsername($username)
            ->setAction($action)
            ->setPage($page)
            ->setName($name)
            ->setValue($value);

        $manager->persist($log);
        $manager->flush();
    }
}
