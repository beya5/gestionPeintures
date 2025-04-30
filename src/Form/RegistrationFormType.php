<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champs liés à l'utilisateur
            ->add('eamillogin', TextType::class, [
                'label' => 'Email login',
            ])
            
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            
            // Conditions
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'Agree to terms',
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])

            // Champs liés à la Personne
            ->add('personneCin', TextType::class, [
                'mapped' => false,
                'label' => 'CIN',
                'attr' => ['maxlength' => 8],
            ])
            ->add('personneNom', TextType::class, [
                'mapped' => false,
                'label' => 'Nom',
                'attr' => ['maxlength' => 50],
            ])
            ->add('personnePrenom', TextType::class, [
                'mapped' => false,
                'label' => 'Prénom',
                'attr' => ['maxlength' => 50],
            ])
            ->add('personneTel', TextType::class, [
                'mapped' => false,
                'label' => 'Téléphone',
                'attr' => ['maxlength' => 15],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
