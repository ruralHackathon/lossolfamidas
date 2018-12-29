<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\HacerRepository")
 */
class Hacer
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
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="text")
     */
    private $texto;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
     /**
     * @ORM\OneToOne(targetEntity="App\Entity\Imagen", orphanRemoval=true, cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $imagen;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function __construct()
    {
        $this->imagen = new Imagen();
    }
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
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }
<<<<<<< HEAD
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }
=======

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getTexto(): ?string
    {
        return $this->texto;
    }
<<<<<<< HEAD
    public function setTexto(string $texto): self
    {
        $this->texto = $texto;
        return $this;
    }
=======

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getImagen(): ?Imagen
    {
        return $this->imagen;
    }
<<<<<<< HEAD
    public function setImagen(Imagen $imagen): self
    {
        $this->imagen = $imagen;
        return $this;
    }
}
=======

    public function setImagen(Imagen $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
