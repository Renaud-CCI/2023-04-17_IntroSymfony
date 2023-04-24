<?php

namespace App\Controller;

use App\Entity\Campaign;
use App\Entity\Payment;
use App\Form\PaymentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/payment')]
class PaymentController extends AbstractController
{
    #[Route('/', name: 'app_payment_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $payments = $entityManager
            ->getRepository(Payment::class)
            ->findAll();

        return $this->render('payment/index.html.twig', [
            'payments' => $payments,
        ]);
    }

    #[Route('/new/{id}', name: 'app_payment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Campaign $campaign): Response
    {

        $payment = new Payment();
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        

        if ($form->isSubmitted()) {
            $payment->getParticipant()->setCampaign($campaign);

            $entityManager->persist($payment->getParticipant());
            $entityManager->persist($payment);
            $entityManager->flush();

            dd($request);
            return $this->redirectToRoute('app_stripe_charge', [
                'id' => $payment->getId(),
                'campaign' => $campaign,
                'payment' => $payment,
                'stripe_key' => $_ENV["STRIPE_KEY"],
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('payment/new.html.twig', [
            'payment' => $payment,
            'form' => $form,
            'campaign' => $campaign,
            'stripe_key' => $_ENV["STRIPE_KEY"]
        ]);
    }
}
