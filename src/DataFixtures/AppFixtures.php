<?php

namespace App\DataFixtures;

use App\Entity\Peinture;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création des catégories
        $categorie1 = new Categorie();
        $categorie1->setDesignation('Paysage');
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setDesignation('Portrait');
        $manager->persist($categorie2);

        // Création d'une peinture
        $peinture = new Peinture();
        $peinture->setNom('Soleil Couchant');
        $peinture->setDescription('Un magnifique coucher de soleil.');
        $peinture->setLargeur('50');
        $peinture->setHauteur('40');
        $peinture->setEnVente(true);
        $peinture->setPrix('200');
        $peinture->setDateRealisation(new \DateTime('2025-04-26'));

        // Associer les catégories à la peinture
        $peinture->addCategory($categorie1);  // Ajout de la catégorie "Paysage"
        $peinture->addCategory($categorie2);  // Ajout de la catégorie "Portrait"

        $manager->persist($peinture);

        // Enregistrer les données dans la base
        $manager->flush();
    }
}
