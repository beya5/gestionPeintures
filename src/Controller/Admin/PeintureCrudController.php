<?php

namespace App\Controller\Admin;

use App\Entity\Peinture;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

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
            UrlField::new('imageUrl', 'URL de l\'image')
            ->hideOnIndex(),
        ImageField::new('imageUrl', 'Image')
            ->setBasePath('') 
            ->onlyOnIndex()
        ];
    }
}
