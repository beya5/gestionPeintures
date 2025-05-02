<?php

namespace App\Form;

use App\Entity\Peinture;
use App\Entity\categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class PeintureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('largeur')
            ->add('hauteur')
            ->add('en_vente')
            ->add('prix')
            ->add('date_realisation', DateTimeType::class, [ 
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('description')
            ->add('categories', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom', 
                'multiple' => true,
                'expanded' => false, 
            ])
            ->add('imageUrl', UrlType::class, [
                'label' => 'URL de l\'image',
                'required' => false,
                'attr' => [
                    'placeholder' => 'https://example.com/image.jpg'
                ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Peinture::class,
        ]);
    }
}
