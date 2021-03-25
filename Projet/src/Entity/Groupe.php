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

    /**
     * Groupe constructor.
     */
    public function __construct()
    {
        $this->albums = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return $this
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombreMembre(): ?int
    {
        return $this->nombreMembre;
    }

    /**
     * @param int $nombreMembre
     * @return $this
     */
    public function setNombreMembre(int $nombreMembre): self
    {
        $this->nombreMembre = $nombreMembre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCheminLogo(): ?string
    {
        return $this->cheminLogo;
    }

    /**
     * @param string|null $cheminLogo
     * @return $this
     */
    public function setCheminLogo(?string $cheminLogo): self
    {
        $this->cheminLogo = $cheminLogo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return $this
     */
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return string|null
     */
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

    /**
     * @param Album $album
     * @return $this
     */
    public function addAlbum(Album $album): self
    {
        if (!$this->albums->contains($album)) {
            $this->albums[] = $album;
            $album->setGroupe($this);
        }

        return $this;
    }

    /**
     * @param Album $album
     * @return $this
     */
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
