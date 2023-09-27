<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

#[Route('/test/{id}', name: 'test')]
public function test($id) 
{
    return $this->render('accueil/home.html.twig',['param'=>$id]); //...,la parametre a envoyer au twig(home.html.twig)
}
}