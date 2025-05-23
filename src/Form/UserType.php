<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\personne;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password')
            ->add('roles')
            ->add('eamillogin')
            ->add('cin')
            ->add('personne', EntityType::class, [
                'class' => Personne::class,
                'choice_label' => function ($personne) {
                    return $personne->getPrenom().' '.$personne->getNom();
                },
                
            ]);
            $builder->add('password', PasswordType::class, [
                'required' => true,
                'mapped' => false, 
                'attr' => ['autocomplete' => 'new-password']]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
