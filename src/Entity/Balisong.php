<?php
/**
 * Created by PhpStorm.
 * User: Cedric
 * Date: 26/09/2018
 * Time: 12:14
 */

namespace App\Entity;


class Balisong
{
    //<editor-fold desc="Variables">
    private $id;
    private $description;
    private $price;
    private $colour;
    private $bladeLength;
    private $bladeMaterial;
    private $bladeType;
    private $lockingType;
    private $handle;
    private $brand;
    private $model;
    private $ref;
    private $imageUrl;
    //</editor-fold>

    //<editor-fold desc="Setters">
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function setColour(string $colour)
    {
        $this->colour = $colour;
    }

    public function setBladeLength(int $bladeLength)
    {
        $this->bladeLength = $bladeLength;
    }

    public function setBladeMaterial(string $bladeMaterial)
    {
        $this->bladeMaterial = $bladeMaterial;
    }

    public function setBladeType(string $bladeType)
    {
        $this->bladeType = $bladeType;
    }

    public function setLockingType(string $lockingType)
    {
        $this->lockingType = $lockingType;
    }

    public function setHandle(string $handle)
    {
        $this->handle = $handle;
    }

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function setRef(int $ref)
    {
        $this->ref = $ref;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
    //</editor-fold>

    //<editor-fold desc="Getters">
    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function getBladeLength()
    {
        return $this->bladeLength;
    }

    public function getBladeMaterial()
    {
        return $this->bladeMaterial;
    }

    public function getBladeType()
    {
        return $this->bladeType;
    }

    public function getLockingType()
    {
        return $this->lockingType;
    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    //</editor-fold>
}