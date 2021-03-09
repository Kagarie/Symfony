<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupeRepository::class)
 */
class Groupe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreMembre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cheminLogo;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $genre;

    /**
     * @ORM\OneToMany(targetEntity=Album::class, mappedBy="groupe")
     */
    private $albums;

    public function __construct()
    {
        $this->albums = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNombreMembre(): ?int
    {
        return $this->nombreMembre;
    }

    public function setNombreMembre(int $nombreMembre): self
    {
        $this->nombreMembre = $nombreMembre;

        return $this;
    }

    public function getCheminLogo(): ?string
    {
        return $this->cheminLogo;
    }

    public function setCheminLogo(?string $cheminLogo): self
    {
        $this->cheminLogo = $cheminLogo;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }

    /**
     * @return Collection|Album[]
     */
    public function getAlbums(): Collection
    {
        return $this->albums;
    }

    public function addAlbum(Album $album): self
    {
        if (!$this->albums->contains($album)) {
            $this->albums[] = $album;
            $album->setGroupe($this);
        }

        return $this;
    }

    public function removeAlbum(Album $album): self
    {
        if ($this->albums->removeElement($album)) {
            // set the owning side to null (unless already changed)
            if ($album->getGroupe() === $this) {
                $album->setGroupe(null);
            }
        }

        return $this;
    }

}
