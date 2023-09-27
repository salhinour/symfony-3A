<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/showAuthor/{name}', name: 'showAuthor')]
    public function showAuthor($name)
    {
        return $this->render('author/show.html.twig',['param'=>$name]);
    }
    #[Route('/affiche', name: 'app_affiche')]
    public function affiche()
    {
        return $this->render('author/list.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/authorDetails/{id}', name: 'authorDetails')]
    public function authorDetails($id)
    {
        return $this->render('author/showAuthor.html.twig',['param'=>$id]);
    }
}
