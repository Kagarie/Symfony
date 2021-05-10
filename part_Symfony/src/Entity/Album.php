<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlbumRepository::class)
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cheminImage;

    /**
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="albums")
     */
    private $groupe;

    /**
     * @ORM\OneToMany(targetEntity=Musique::class, mappedBy="album")
     */
    private $musiques;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->musiques = new ArrayCollection();
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
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return $this
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     * @return $this
     */
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCheminImage(): ?string
    {
        return $this->cheminImage;
    }

    /**
     * @param string|null $cheminImage
     * @return $this
     */
    public function setCheminImage(?string $cheminImage): self
    {
        $this->cheminImage = $cheminImage;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface|null $date
     * @return $this
     */
    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Groupe|null
     */
    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    /**
     * @param Groupe|null $groupe
     * @return $this
     */
    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * @return string|null
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getTitre();
    }

    /**
     * @return Collection|Musique[]
     */
    public function getMusiques(): Collection
    {
        return $this->musiques;
    }

    /**
     * @param Musique $musique
     * @return $this
     */
    public function addMusique(Musique $musique): self
    {
        if (!$this->musiques->contains($musique)) {
            $this->musiques[] = $musique;
            $musique->setAlbum($this);
        }

        return $this;
    }

    /**
     * @param Musique $musique
     * @return $this
     */
    public function removeMusique(Musique $musique): self
    {
        if ($this->musiques->removeElement($musique)) {
            // set the owning side to null (unless already changed)
            if ($musique->getAlbum() === $this) {
                $musique->setAlbum(null);
            }
        }

        return $this;
    }



}
