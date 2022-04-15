<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreerTacheController extends AbstractController
{
    /**
     * @Route("/createtache", name="app_creer_tache")
     */
    public function index(): Response
    {
        return $this->render('creer_tache/create.html.twig', [
            'controller_name' => 'CreerTacheController',
        ]);
    }
}
