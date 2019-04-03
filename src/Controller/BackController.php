<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BackController extends AbstractController
{
    public function articles(): Response
    {
        return $this->render('back-office/articles/index.html.twig');
    }

    public function create(): Response
    {

        //ajout message flash
        $this->addFlash('success', 'Votre article a été ajouté');
        return $this->render('back-office/articles/create.html.twig');
    }

    public function edit(): Response
    {
        $this->addFlash('success', 'Votre article a été modifié');
        return $this->render('back-office/articles/edit.html.twig');
    }

    public function delete(): Response
    {
        //ajout message flash
        $this->addFlash('danger', 'Votre article a été supprimé');
        return $this->render('back-office/articles/delete.html.twig');
    }
}
