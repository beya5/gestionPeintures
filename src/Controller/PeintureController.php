<?php

namespace App\Controller;

use App\Entity\Peinture;
use App\Entity\Commentaire;
use App\Form\PeintureType;
use App\Form\CommentaireType;
use App\Repository\PeintureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/peinture')]
class PeintureController extends AbstractController
{
    #[Route('/', name: 'app_peinture_index', methods: ['GET'])]
    public function index(PeintureRepository $peintureRepository): Response
    {
        return $this->render('peinture/index.html.twig', [
            'peintures' => $peintureRepository->findAll(),
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/peinture/new', name: 'app_peinture_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $peinture = new Peinture();
        $form = $this->createForm(PeintureType::class, $peinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
if ($imageFile) {
    $newFilename = uniqid().'.'.$imageFile->guessExtension();
    $imageFile->move(
        $this->getParameter('kernel.project_dir').'/public/images/peintures',
        $newFilename
    );
    $peinture->setImageUrl('/images/peintures/' . $newFilename);
}


            $em->persist($peinture);
            $em->flush();

            return $this->redirectToRoute('app_peinture_index');
        }

        return $this->render('peinture/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_peinture_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Peinture $peinture, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setPeinture($peinture);
            $commentaire->setPersonne($this->getUser());
            $commentaire->setDate(new \DateTime());
            $commentaire->setNom($this->getUser()->getNom());
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_peinture_show', ['id' => $peinture->getId()]);
        }

        return $this->render('peinture/show.html.twig', [
            'peinture' => $peinture,
            'commentForm' => $form,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
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

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_peinture_delete', methods: ['POST'])]
    public function delete(Request $request, Peinture $peinture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$peinture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($peinture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_peinture_index', [], Response::HTTP_SEE_OTHER);
    }
}