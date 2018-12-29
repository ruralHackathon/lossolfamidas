<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\EventosRepository")
 */
class Eventos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titular;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechahora;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texto;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitular(): ?string
    {
        return $this->titular;
    }
    public function setTitular(?string $titular): self
    {
        $this->titular = $titular;
        return $this;
    }
    public function getFechahora(): ?\DateTimeInterface
    {
        return $this->fechahora;
    }
    public function setFechahora(?\DateTimeInterface $fechahora): self
    {
        $this->fechahora = $fechahora;
        return $this;
    }
    public function getTexto(): ?string
    {
        return $this->texto;
    }
    public function setTexto(?string $texto): self
    {
        $this->texto = $texto;
        return $this;
    }
    public function getUrl(): ?string
    {
        return $this->url;
    }
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}