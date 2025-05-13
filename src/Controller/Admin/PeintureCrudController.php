<?php

namespace App\Controller\Admin;


use App\Entity\Peinture;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;


class PeintureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Peinture::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('nom'),
            TextField::new('largeur'),
            TextField::new('hauteur'),
            TextField::new('prix'),
            DateTimeField::new('date_realisation')
                ->setFormat('dd/MM/yyyy')
                ->renderAsNativeWidget(),
            TextEditorField::new('description'),
            AssociationField::new('categories')
                ->setFormTypeOption('choice_label', 'designation')
                ->formatValue(function ($value, $entity) {
                    return implode(', ', $entity->getCategories()->map(fn($c) => $c->getDesignation())->toArray());
                }),
            BooleanField::new('en_vente', 'En vente'),
           
            TextField::new('imageUrl', 'Image URL')->onlyOnForms(),

ImageField::new('imageUrl', 'Aperçu')
    ->setBasePath('/')
    ->onlyOnIndex(),

            ];
    }
}