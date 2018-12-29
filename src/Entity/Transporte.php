<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\TransporteRepository")
 */
class Transporte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titulo;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getId(): ?int
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getUrl(): ?string
    {
        return $this->url;
    }
<<<<<<< HEAD
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
=======

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }
<<<<<<< HEAD
    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }
}
=======

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
