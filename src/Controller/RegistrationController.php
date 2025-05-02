<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Personne;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
{
    $personne = new Personne();
    $form = $this->createForm(RegistrationFormType::class, $personne);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $personne->setPassword(
            $userPasswordHasher->hashPassword(
                $personne,
                $form->get('plainPassword')->getData()
            )
        );
        
        $roles = ['ROLE_USER'];
        if ($personne->getEamillogin() === 'admin@gmail.com') {
            $roles[] = 'ROLE_ADMIN'; 
        }
        $personne->setRoles($roles);

        $entityManager->persist($personne);
        $entityManager->flush();

        return $this->redirectToRoute('app_login');
    }

    return $this->render('registration/register.html.twig', [
        'registrationForm' => $form->createView(),
    ]);
}
}
