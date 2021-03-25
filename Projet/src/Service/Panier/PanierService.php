<?php

namespace App\Service\Panier;

use App\Repository\AlbumRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService
{
    protected $session;
    protected $albumRepository;

    /**
     * PanierService constructor.
     * @param $session
     */
    public function __construct(SessionInterface $session, AlbumRepository $albumRepository)
    {
        $this->session = $session;
        $this->albumRepository = $albumRepository;
    }


    //on ajoute un un album et on retourne l'id du groupe de l'album
    public function add(int $id): int
    {
        $panier = $this->session->get('panier', []);

        if (!empty(($panier[$id])))
            $panier[$id]++;
        else
            $panier[$id] = 1;

        $this->session->set('panier', $panier);

        return $this->albumRepository->find($id)->getGroupe()->getId();
    }

    // On supprime un album du panier
    public function remove(int $id)
    {
        $panier = $this->session->get('panier', []);
        if (!empty(($panier[$id]))) {
            unset($panier[$id]);
        }

        $this->session->set('panier', $panier);
    }

    // On retourne tout le panier
    public function getFullPanier(): array
    {
        $panier = $this->session->get('panier', []);

        $panierData = [];

        foreach ($panier as $id => $quantity) {
            $panierData[] = [
                'album' => $this->albumRepository->find($id),
                'quantity' => $quantity
            ];
        }
        return $panierData;
    }

    // On calcul le total du panier
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->getFullPanier() as $item)
            $total += $item['album']->getPrix() * $item['quantity'];
        return $total / 100;
    }
}
