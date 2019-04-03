<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FrontArticleController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('index.html.twig');
    }

    public function show():Response
    {
        return $this->render('article/show.html.twig');
    }
}

