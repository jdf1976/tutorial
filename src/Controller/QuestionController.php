<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('what a be witching controler that we make!');
    }

    /**
     * @Route("/question/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show a quation "%s"!',
        ucwords(str_replace('-', ' ',$slug))
        ));
    }
}