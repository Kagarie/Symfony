<?php

namespace App\Entity;

use App\Repository\MusiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MusiqueRepository::class)
 */
class Musique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cheminMusique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity=Album::class, inversedBy="musiques")
     */
    private $album;

    /**
     * Musique constructor.
     * @param $album
     */
    public function __construct($titre)
    {
        $this->titre = $titre;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCheminMusique(): ?string
    {
        return $this->cheminMusique;
    }

    public function setCheminMusique(?string $cheminMusique): self
    {
        $this->cheminMusique = $cheminMusique;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): self
    {
        $this->album = $album;

        return $this;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->getTitre();
    }

}
