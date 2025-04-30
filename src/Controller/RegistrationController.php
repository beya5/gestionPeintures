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
        $user = new User();
    $personne = new Personne(); // Create a new Personne instance
    
    // Create the form for User and Personne (You may need a combined form or two forms)
    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Get data from form
        $plainPassword = $form->get('plainPassword')->getData();
        $cin = $form->get('personneCin')->getData();
        $personneNom = $form->get('personneNom')->getData(); // Assuming you have nom in form
        $personnePrenom = $form->get('personnePrenom')->getData(); // Assuming you have prenom in form
        $personneTel = $form->get('personneTel')->getData(); // Assuming you have tel in form
        // Set values for User entity
        $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
        //Assign role based on logic
        if ($user->getEamillogin() === 'admin@gmail.com') {
            $user->setRoles(['ROLE_ADMIN']);
        } else {
            $user->setRoles(['ROLE_USER']);
        }
        $user->setCin($cin);
        // Set values for Personne entity
        $personne->setNom($personneNom);
        $personne->setPrenom($personnePrenom);
        $personne->setTel($personneTel);
        $personne->setCin($cin); // If you want cin to be the same for Personne
        // Assign the Personne object to the User entity
        $user->setPersonne($personne);
        // Persist both entities (User and Personne)
        $entityManager->persist($personne); // Persist Personne first
        $entityManager->persist($user); // Persist User second
        $entityManager->flush(); // Save to database
        return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
