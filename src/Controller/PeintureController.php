<?php

namespace App\Controller;

use App\Entity\Peinture;
use App\Form\PeintureType;
use App\Repository\PeintureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/peinture')]
final class PeintureController extends AbstractController{
    #[Route(name: 'app_peinture_index', methods: ['GET'])]
    public function index(PeintureRepository $peintureRepository): Response
    {
        return $this->render('peinture/index.html.twig', [
            'peintures' => $peintureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_peinture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $peinture = new Peinture();
        $form = $this->createForm(PeintureType::class, $peinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($peinture);
            $entityManager->flush();

            return $this->redirectToRoute('app_peinture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('peinture/new.html.twig', [
            'peinture' => $peinture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_peinture_show', methods: ['GET'])]
    public function show(Peinture $peinture): Response
    {
        return $this->render('peinture/show.html.twig', [
            'peinture' => $peinture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_peinture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Peinture $peinture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PeintureType::class, $peinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_peinture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('peinture/edit.html.twig', [
            'peinture' => $peinture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_peinture_delete', methods: ['POST'])]
    public function delete(Request $request, Peinture $peinture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$peinture->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($peinture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_peinture_index', [], Response::HTTP_SEE_OTHER);
    }
}
