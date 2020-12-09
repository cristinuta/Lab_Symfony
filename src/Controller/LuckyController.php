<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class LuckyController extends AbstractController
{
     /**
      * @Route("/lucky/number")
      */
    public function number(LoggerInterface $logger): Response
    {
        $number = random_int(0, 100);

        $logger->info("Randomly generated number is $number!");

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

    }
}