<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FrontArticleController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('list.html.twig');
    }
}
