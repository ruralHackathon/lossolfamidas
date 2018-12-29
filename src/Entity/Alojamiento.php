<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AlojamientoRepository")
 */
class Alojamiento
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
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nombre;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $direccion;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descripcion;
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
    public function getId(): ?int
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getNombre(): ?string
    {
        return $this->nombre;
    }
<<<<<<< HEAD
    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }
=======

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getDireccion(): ?string
    {
        return $this->direccion;
    }
<<<<<<< HEAD
    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;
        return $this;
    }
=======

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }
<<<<<<< HEAD
    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;
        return $this;
    }
=======

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

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
}
=======

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
