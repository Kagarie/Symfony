<?php

namespace App\Controller;

use App\Entity\Groupe;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{

    #[Route('/groupe/{groupeId}', name: 'groupe')]
    public function groupe($groupeId): Response
    {
        $groupe =$this->getDoctrine()->getRepository(Groupe::class)->find($groupeId);
        return $this->render('catalogue/index.html.twig', [
            "groupe" => $groupe
        ]);
    }

}
