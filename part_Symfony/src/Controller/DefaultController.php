<?php

namespace App\Controller;

use App\Entity\Groupe;
use App\Service\Panier\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @var PanierService
     */
    protected $panierService;

    /**
     * DefaultController constructor.
     * @param PanierService $panierService
     */
    public function __construct(PanierService $panierService)
    {
        $this->panierService = $panierService;
    }

    /**
     * @return Response
     */
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository(Groupe::class)->findAll();
        return $this->render('default/index.html.twig', [
            "groupes" => $groupe,
            'total' => $this->panierService->getTotal(),
            'nbrItems'=> $this->panierService->getNbrAlbum(),
        ]);
    }

    /**
     * @param $groupeId
     * @return Response
     */
    #[Route('/groupe/{groupeId}', name: 'groupe')]
    public function groupe($groupeId): Response
    {
        $groupe =$this->getDoctrine()->getRepository(Groupe::class)->find($groupeId);
        return $this->render('catalogue/index.html.twig', [
            "groupe" => $groupe,
            'total' => $this->panierService->getTotal(),
            'nbrItems'=> $this->panierService->getNbrAlbum(),
        ]);
    }

}
