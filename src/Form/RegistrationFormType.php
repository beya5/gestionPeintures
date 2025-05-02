<?php

namespace App\Form;

use App\Entity\Personne; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('eamillogin', TextType::class, [
                'label' => 'Email'
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Password',
                'mapped' => false
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'I agree to the terms'
            ])
            ->add('cin', TextType::class, [
                'label' => 'CIN'
            ])
            ->add('nom', TextType::class, [
                'label' => 'Last Name'
            ])
            ->add('prenom', TextType::class, [
                'label' => 'First Name'
            ])
            ->add('tel', IntegerType::class, [
                'label' => 'Phone Number'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class, // Utilisez Personne ici
        ]);
    }
}