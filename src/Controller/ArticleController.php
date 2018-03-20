<?php
namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{

    /**
     * @Route("/news/{article}")
     */
    public function homepage($article)
    {
        return new Response("My first new page of s".$article);
    }

    /**
     * @Route("/show/{slug}")
     */
    public function showArticles($slug){
        //return new Response("My first new page of s".$slug);
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
        dump($comments);
        return $this->render('article/show.html.twig',['comments' => $comments]);
    }
}