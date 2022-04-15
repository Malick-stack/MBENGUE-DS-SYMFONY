<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListTacheController extends AbstractController
{
    /**
     * @Route("/listtache", name="app_list_tache")
     */
    public function index(): Response
    {
        return $this->render('list_tache/list.html.twig', [
            'controller_name' => 'ListTacheController',
        ]);
    }
}
