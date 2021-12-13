<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistorController extends AbstractController
{
    /**
     * @Route("/registor", name="registor")
     */
    public function index(): Response
    {
        return $this->render('registor/index.html.twig', [
            'controller_name' => 'RegistorController',
        ]);
    }
}
