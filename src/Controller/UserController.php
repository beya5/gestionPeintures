<?php

namespace App\Controller;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Entity\Personne; 
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PeintureRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
#[IsGranted('ROLE_USER')]
#[Route('/user')]
final class UserController extends AbstractController{
    
    #[Route('/home', name: 'app_user_home')]
public function home(): Response
{
    return $this->render('user/home.html.twig');
}


    #[Route('/commentaires', name: 'app_user_commentaires')]
    public function commentaires(CommentaireRepository $commentaireRepository): Response
    {
        $user = $this->getUser();
        return $this->render('user/commentaires.html.twig', [
            'commentaires' => $commentaireRepository->findBy(['personne' => $user])
        ]);
    }

    #[Route('/commentaire/new/{peintureId}', name: 'app_user_commentaire_new')]
    public function newCommentaire(Request $request, EntityManagerInterface $em, int $peintureId, PeintureRepository $peintureRepo): Response
    {
        $commentaire = new Commentaire();
        $peinture = $peintureRepo->find($peintureId);
        
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Personne $user */
            $user = $this->getUser();
            if (!$user instanceof Personne) {
                throw new \RuntimeException('L\'utilisateur doit être une Personne');
            }
            
            $commentaire->setPersonne($user)
                       ->setPeinture($peinture)
                       ->setDate(new \DateTime());
            
            $em->persist($commentaire);
            $em->flush();
    
            return $this->redirectToRoute('app_user_commentaires');
        }
    
        return $this->render('user/commentaire_form.html.twig', [
            'form' => $form->createView(),
            'peinture' => $peinture
        ]);
    }

    #[Route('/commentaire/delete/{id}', name: 'app_user_commentaire_delete')]
    public function deleteCommentaire(
        EntityManagerInterface $em, 
        Commentaire $commentaire
    ): Response {
        $this->denyAccessUnlessGranted('DELETE', $commentaire);
        
        $em->remove($commentaire);
        $em->flush();

        return $this->redirectToRoute('app_user_commentaires');
    }
    #[Route('/logout', name: 'app_logout')]
public function logout(): void
{
 
    throw new \Exception('Logout should be handled by Symfony.');
}

}
