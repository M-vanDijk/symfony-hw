<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number', name:"lucky_number")]
    public function number(): Response
    {
        $number = random_int(0, 100);
        $games = ['Eldenring', "Darksouls", "Rainbow six siege", "Raft", "Left 4 Dead"];

        return $this->render('bezoeker/number.html.twig', ['number'=>$number,
            'games'=>$games]);
    }

    #[Route('/lucky/number/{max}', name:"your_lucky_number")]
    public function maxnumber(int $max): Response
    {
        $number = random_int(0, $max);

        return $this->render('bezoeker/mynumber.html.twig', ['number'=>$number]);
    }
}