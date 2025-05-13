<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class PeintureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('largeur')
            ->add('hauteur')
            ->add('prix')
            ->add('enVente')
            ->add('dateRealisation', null, [
                'widget' => 'single_text'
            ])
            ->add('description')
            ->add('imageUrl', UrlType::class, [
        'label' => 'Lien URL de l\'image (optionnel)',
        'required' => false,
    ])
    ->add('imageFile', FileType::class, [
        'label' => 'Fichier image (upload local, optionnel)',
        'required' => false,
        'mapped' => false
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Peinture::class,
        ]);
    }
}