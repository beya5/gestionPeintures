<?php

namespace App\Form;

use App\Entity\Peinture;
use App\Entity\categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('date_realisation', null, [
                'widget' => 'single_text'
            ])
            ->add('description')
            ->add('categories', EntityType::class, [
                'class' => categorie::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Peinture::class,
        ]);
    }
}
