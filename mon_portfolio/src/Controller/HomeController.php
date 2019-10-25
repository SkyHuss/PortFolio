<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     * 
     */
    public function index()
    {
        return $this->render('Coucou c est un page d accueil !')
    }
}

