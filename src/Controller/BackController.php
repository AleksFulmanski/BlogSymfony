<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BackController extends AbstractController
{
    public function articles(): Response
    {
        return $this->render('back-office/articles/articles.html.twig');
    }

    public function create(): Response
    {
        return $this->render('back-office/articles/create.html.twig');
    }

    public function edit(): Response
    {
        return $this->render('back-office/articles/edit.html.twig');
    }

    public function delete(): Response
    {
        return $this->render('back-office/articles/delete.html.twig');
    }
}