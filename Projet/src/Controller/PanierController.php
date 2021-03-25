<?php

namespace App\Controller;


use App\Service\Panier\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier')]
    public function index(PanierService $panierService): Response
    {
        //dd($panierData);
        return $this->render('panier/index.html.twig', [
            'items' => $panierService->getFullPanier(),
            'total' => $panierService->getTotal()
        ]);
    }

    #[Route ('panier/add/{id}', name: 'panier_add')]
    public function add($id, PanierService $panierService)
    {
        $groupeId = $panierService->add($id);

        // dd($session->get('panier'));

        return $this->redirectToRoute("groupe", array('groupeId' => $groupeId));
    }

    #[Route ('/panier/remove/{id}', name: 'panier_remove')]
    public function remove($id, PanierService $panierService)
    {
        $panierService->remove($id);
        return $this->redirectToRoute("panier");

    }
}
