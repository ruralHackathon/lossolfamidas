<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
/**
 * @ORM\Entity(repositoryClass="App\Repository\ImagenRepository")
 */
class Imagen
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
    private $nombre;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $original;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\Column(type="integer")
     */
    private $size;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Hacer", mappedBy="imagen", cascade={"persist", "remove"})
     */
    private $hacer;
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
    public function getOriginal(): ?string
    {
        return $this->original;
    }
<<<<<<< HEAD
    public function setOriginal(?string $original): self
    {
        $this->original = $original;
        return $this;
    }
=======

    public function setOriginal(?string $original): self
    {
        $this->original = $original;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getSize(): ?int
    {
        return $this->size;
    }
<<<<<<< HEAD
    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
    }
=======

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function getHacer(): ?Hacer
    {
        return $this->hacer;
    }
<<<<<<< HEAD
    public function setHacer(Hacer $hacer): self
    {
        $this->hacer = $hacer;
=======

    public function setHacer(Hacer $hacer): self
    {
        $this->hacer = $hacer;

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
        // set the owning side of the relation if necessary
        if ($this !== $hacer->getImagen()) {
            $hacer->setImagen($this);
        }
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
