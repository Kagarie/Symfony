<?php

namespace App\Controller;

use App\Entity\Groupe;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'catalogue')]
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository(Groupe::class)->findAll();
        return $this->render('catalogue/index.html.twig', [
            "groupe" => $groupe
        ]);
    }

    #[Route('/groupe', name: 'groupe')]
    public function groupe(Request $request): Response
    {

        $route = $request->attributes->get('_route');
        $parametre = $request->attributes->get('_route_params');
        var_dump($route);
        var_dump($parametre);
        return $this->render('catalogue/groupe.html.twig', [
            "groupe" => $parametre
        ]);
    }

}
