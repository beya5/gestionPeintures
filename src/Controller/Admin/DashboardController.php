<?php

namespace App\Controller\Admin;

use App\Entity\Peinture;
use App\Entity\Personne;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\User;
use App\Repository\PeintureRepository;
use App\Repository\PersonneRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
#[Route('/admin')]
class DashboardController extends AbstractDashboardController
{
    private AdminUrlGenerator $adminUrlGenerator;
    public function __construct(
        AdminUrlGenerator $adminUrlGenerator,
        PeintureRepository $peintureRepository,
        PersonneRepository $personneRepository,
        CategorieRepository $categorieRepository,
        CommentaireRepository $commentaireRepository,
        UserRepository $userRepository
    ) {
        $this->adminUrlGenerator = $adminUrlGenerator;
        $this->peintureRepository = $peintureRepository;
        $this->personneRepository = $personneRepository;
        $this->categorieRepository = $categorieRepository;
        $this->commentaireRepository = $commentaireRepository;
        $this->userRepository = $userRepository;
    }

    #[Route('/dashboard', name: 'app_admin_dashboard')]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDashboard(): Response
    {
    return $this->render('admin/dashboard.html.twig',[
        'peinturesCount' => $this->peintureRepository->count([]),
        'personnesCount' => $this->personneRepository->count([]),
        'categoriesCount' => $this->categorieRepository->count([]),
        'commentairesCount' => $this->commentaireRepository->count([]),
        'usersCount' => $this->userRepository->count([]),
    ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion des Peintures');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Peintures', 'fa fa-paint-brush', Peinture::class);
        yield MenuItem::linkToCrud('Personnes', 'fa fa-user', Personne::class);
        yield MenuItem::linkToCrud('Catégories', 'fa fa-tags', Categorie::class);
        yield MenuItem::linkToCrud('Commentaires', 'fa fa-comments', Commentaire::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-users', User::class);
    }
}
