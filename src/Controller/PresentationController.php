<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/', name:'me')]
    public function presentation(): Response
    {
        return $this->render('home/me.html.twig');
    }

    #[Route('/about', name:'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        return $this->render('home/report.html.twig');
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $randomNumber = rand(1, 12);
        $randomImage = $randomNumber . '.gif';
        $message = 'Have A nice day!!!';
        return $this->render('home/lucky.html.twig', [
            'randomImage' => $randomImage,

        ]);
    }

    #[Route('/api', name:'api')]
    public function api(): Response
    {
        return $this->render('home/api.html.twig');
    }
}
