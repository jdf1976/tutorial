<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommetnController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="post")
     */
    public function commentVote($id,$direction)
    {
            // todo use in database query

            if ($direction === 'up') {
                $currentVoteCount = random_int(7,100);
            } else {
                $currentVoteCount = random_int(0,5);
            }

            return new JsonResponse(['votes'=>$currentVoteCount]);
    }

}