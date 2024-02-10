<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainAdminController extends AbstractController
{
    #[Route('/mainAdmin', name: 'app_mainAdmin')]
    public function index(): Response
    {
        return $this->render('mainAdmin/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
