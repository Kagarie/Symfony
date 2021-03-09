<?php

namespace App\Controller\Admin;

use App\Entity\Album;
use App\Entity\Groupe;
use App\Entity\Musique;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(GroupeCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Projet');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-lock');
        yield MenuItem::linkToCrud('User', 'fas	fa-user', User::class);
        yield MenuItem::subMenu('Musique', 'fas fa-music')->setSubItems([
            MenuItem::linkToCrud('Groupe', 'fas fa-users', Groupe::class),
            MenuItem::linkToCrud('Album', 'fas fa-record-vinyl', Album::class),
            MenuItem::linkToCrud('chanson', 'fas fa-music', Musique::class),]);
        yield MenuItem::linkToRoute('Retour au site','fa fa-home', 'index');

    }
}
