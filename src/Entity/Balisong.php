<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BalisongRepository")
 */
class Balisong
{
    //<editor-fold desc="Variables">
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $colour;

    /**
     * @ORM\Column(type="integer")
     */
    private $bladeLength;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $bladeType;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lockingType;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageUrl;

    /**
     * @ORM\Column(type="integer")
     */
    private $viewCounter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Material", inversedBy="balisongsBlade")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bladeMaterial;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Material", inversedBy="balisongsHandle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $handle;
    //</editor-fold>

    //<editor-fold desc="Setters/Getters">
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getColour(): ?string
    {
        return $this->colour;
    }

    public function setColour(string $colour): self
    {
        $this->colour = $colour;

        return $this;
    }

    public function getBladeLength(): ?int
    {
        return $this->bladeLength;
    }

    public function setBladeLength(int $bladeLength): self
    {
        $this->bladeLength = $bladeLength;

        return $this;
    }

    public function getBladeType(): ?string
    {
        return $this->bladeType;
    }

    public function setBladeType(string $bladeType): self
    {
        $this->bladeType = $bladeType;

        return $this;
    }

    public function getLockingType(): ?string
    {
        return $this->lockingType;
    }

    public function setLockingType(string $lockingType): self
    {
        $this->lockingType = $lockingType;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getViewCounter(): ?int
    {
        return $this->viewCounter;
    }

    public function setViewCounter(int $viewCounter): self
    {
        $this->viewCounter = $viewCounter;

        return $this;
    }
    //</editor-fold>

    public function incrementViewCounter()
    {
        $this->viewCounter++;
    }

    public function getBladeMaterial(): ?Material
    {
        return $this->bladeMaterial;
    }

    public function setBladeMaterial(?Material $bladeMaterial): self
    {
        $this->bladeMaterial = $bladeMaterial;

        return $this;
    }

    public function getHandle(): ?Material
    {
        return $this->handle;
    }

    public function setHandle(?Material $handle): self
    {
        $this->handle = $handle;

        return $this;
    }
}
