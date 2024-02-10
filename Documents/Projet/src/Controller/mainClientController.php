<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class mainClientController extends AbstractController
{
    #[Route('/mainClient', name: 'app_mainClient')]
    public function index(): Response
    {
        return $this->render('mainClient/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
