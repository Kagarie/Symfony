<?php

namespace App\Controller;

use App\Entity\Groupe;
use App\Form\CatalogueType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    public function recherche(Request $request)
    {
        $groupe = new Groupe();
        $form = $this->createForm(CatalogueType::class, $groupe);
        $form->handleRequest($request);
        return $this->render('catalogue/index.html.twig', ['form' => $form->createView()]);
    }
}
