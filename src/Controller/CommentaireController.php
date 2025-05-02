<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[Route('/commentaire')]
final class CommentaireController extends AbstractController{
    #[Route('/', name: 'app_commentaire_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findBy(
                ['nom' => $this->getUser()],
                ['date' => 'DESC']
            ),
        ]);
    }

    // Création d'un nouveau commentaire pour une peinture spécifique
    #[Route('/new/{peintureId}', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        int $peintureId
    ): Response {
        $peinture = $entityManager->getRepository(Peinture::class)->find($peintureId);
        
        if (!$peinture) {
            throw $this->createNotFoundException('Peinture non trouvée');
        }

        $commentaire = new Commentaire();
        $commentaire->setAuteur($this->getUser());
        $commentaire->setPeinture($peinture);
        $commentaire->setDateCreation(new \DateTimeImmutable());

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès');
            return $this->redirectToRoute('app_peinture_show', ['id' => $peintureId]);
        }

        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
            'peinture' => $peinture,
        ]);
    }

    // Affichage d'un commentaire (peut-être optionnel selon vos besoins)
    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    #[IsGranted('COMMENTAIRE_VIEW', 'commentaire')]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    // Édition d'un commentaire
    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    #[IsGranted('COMMENTAIRE_EDIT', 'commentaire')]
    public function edit(
        Request $request,
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDateModification(new \DateTimeImmutable());
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire modifié avec succès');
            return $this->redirectToRoute('app_commentaire_index');
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    // Suppression d'un commentaire
    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    #[IsGranted('COMMENTAIRE_DELETE', 'commentaire')]
    public function delete(
        Request $request,
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): Response {
        $peintureId = $commentaire->getPeinture()->getId();

        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire supprimé avec succès');
        }

        return $this->redirectToRoute('app_peinture_show', ['id' => $peintureId]);
    }
}
