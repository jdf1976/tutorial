<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommetnController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="post")
     */
    public function commentVote($id,$direction, LoggerInterface $logger)
    {
            // todo use in database query

            if ($direction === 'up') {
                $logger->info('Voting up');
                $currentVoteCount = random_int(7,100);
            } else {
                $logger->info('Voting down');
                $currentVoteCount = random_int(0,5);
            }

            return new JsonResponse(['votes'=>$currentVoteCount]);
    }

}