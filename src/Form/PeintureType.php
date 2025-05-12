<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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
            ->add('imageFile', FileType::class, [
                'label' => 'Image',
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