<?php

namespace App\Controller;


use App\Service\Panier\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PanierController
 * @package App\Controller
 */
class PanierController extends AbstractController
{

    /**
     * PanierController constructor.
     * @param PanierService $panierService
     */
    public function __construct(PanierService $panierService)
    {
        $this->panierService = $panierService;
    }

    /**
     * @param PanierService $panierService
     * @return Response
     */
    #[Route('/panier', name: 'panier')]
    public function index(): Response
    {
        //dd($panierData);
        return $this->render('panier/index.html.twig', [
            'items' => $this->panierService->getFullPanier(),
            'total' => $this->panierService->getTotal(),
            'nbrItems'=> $this->panierService->getNbrAlbum(),
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route ('panier/add/{id}', name: 'panier_add')]
    public function add($id)
    {
        $groupeId = $this->panierService->add($id);

        // dd($session->get('panier'));

        return $this->redirectToRoute("groupe", array('groupeId' => $groupeId));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route ('/panier/remove/{id}', name: 'panier_remove')]
    public function remove($id)
    {
        $this->panierService->remove($id);
        return $this->redirectToRoute("panier");

    }
}
