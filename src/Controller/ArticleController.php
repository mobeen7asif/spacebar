<?php
namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class ArticleController
{

    /**
     * @Route("//news/{article}")
     */
    public function homepage($article)
    {
        return new Response("My first new page of s".$article);
    }
}