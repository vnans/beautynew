<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActuRepository")
 */
class Actu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ladate;

    /**
     *@var string 
     *@Gedmo\Slug(fields={"titre"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;


    public function __construct(){
        $this->ladate = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getLadate(): ?\DateTimeInterface
    {
        return $this->ladate;
    }

    public function setLadate(\DateTimeInterface $ladate): self
    {
        $this->ladate = $ladate;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
