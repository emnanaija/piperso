<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompteepargneController extends AbstractController
{
    #[Route('/compteepargne', name: 'app_compteepargne')]
    public function index(): Response
    {
        return $this->render('compteepargne/index.html.twig', [
            'controller_name' => 'CompteepargneController',
        ]);
    }
}
