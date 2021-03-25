<?php

namespace App\Service\Panier;

use App\Repository\AlbumRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Class PanierService
 * @package App\Service\Panier
 */
class PanierService
{
    /**
     * @var SessionInterface
     */
    protected $session;
    /**
     * @var AlbumRepository
     */
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

    /**
     * @param int $id
     * @return int
     */
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

    /**
     * @param int $id
     */
    // On supprime un album du panier
    public function remove(int $id)
    {
        $panier = $this->session->get('panier', []);
        if (!empty(($panier[$id]))) {
            unset($panier[$id]);
        }

        $this->session->set('panier', $panier);
    }

    /**
     * @return array
     */
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

    /**
     * @return float
     */
    // On calcul le total du panier
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->getFullPanier() as $item)
            $total += $item['album']->getPrix() * $item['quantity'];
        return $total / 100;
    }

    /**
     * @return int
     */
    //Le nombre de quantité présent dans notre panier
    public function getNbrAlbum(): int
    {
        $nbr = 0;

        foreach ($this->getFullPanier() as $item)
            $nbr += $item['quantity'];

        return $nbr;
    }
}
