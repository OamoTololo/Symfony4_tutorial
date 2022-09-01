<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response('Welcome Oamogetswe Mgidi!!');
    }

    /**
     * @Route("/news/why-asteroids-taste-like-bacon")
     */
    public function show()
    {
        return new Response('Future page to show one space article.');
    }
}