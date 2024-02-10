<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompteepargneClientController extends AbstractController
{
    #[Route('/compteepargneclient', name: 'app_compteepargneclient')]
    public function index(): Response
    {
        return $this->render('compteepargneClient/index.html.twig', [
            'controller_name' => 'CompteepargneClientController',
        ]);
    }
}
