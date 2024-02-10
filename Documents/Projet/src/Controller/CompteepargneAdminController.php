<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompteepargneAdminController extends AbstractController
{
    #[Route('/compteepargneAdmin', name: 'app_compteepargneAdmin')]
    public function index(): Response
    {
        return $this->render('compteepargneAdmin/index.html.twig', [
            'controller_name' => 'CompteepargneAdminController',
        ]);
    }
}
