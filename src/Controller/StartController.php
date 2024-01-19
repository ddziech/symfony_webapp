<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    #[Route('/start', name: 'app_start')]
    public function index(): JsonResponse
    {
        var_dump('asdf');
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/StartController.php',
        ]);
    }

    #[Route('/session', name: 'app_session')]
    public function ses(RequestStack $requestStack): Response
    {
        $requestStack->getSession()->set('a', 'b');

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/StartController.php',
        ]);
    }

}
