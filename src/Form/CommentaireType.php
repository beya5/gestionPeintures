<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\peinture;
use App\Entity\personne;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('contenu')
            ->add('date', null, [
                'widget' => 'single_text'
            ])
            ->add('personne', EntityType::class, [
                'class' => personne::class,
'choice_label' => 'id',
            ])
            ->add('peinture', EntityType::class, [
                'class' => peinture::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
