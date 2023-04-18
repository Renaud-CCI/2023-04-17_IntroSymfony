<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/campaign_v1/create', name: 'campaign_create')]
    public function campaign_create(): Response
    {
        return $this->render('campaign/create.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/campaign_v1/show', name: 'campaign_show')]
    public function campaign_show(): Response
    {
        return $this->render('campaign/show.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/payments/payment', name: 'payments_payment')]
    public function payments_payment(): Response
    {
        return $this->render('payments/payment.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
