<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MaterialRepository")
 */
class Material
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Balisong", mappedBy="bladeMaterial", orphanRemoval=true)
     */
    private $balisongsBlade;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Balisong", mappedBy="handle", orphanRemoval=true)
     */
    private $balisongsHandle;

    public function __construct()
    {
        $this->balisongsBlade = new ArrayCollection();
        $this->balisongsHandle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Balisong[]
     */
    public function getBalisongsBlade(): Collection
    {
        return $this->balisongsBlade;
    }

    public function addBalisongsBlade(Balisong $balisongsBlade): self
    {
        if (!$this->balisongsBlade->contains($balisongsBlade)) {
            $this->balisongsBlade[] = $balisongsBlade;
            $balisongsBlade->setBladeMaterial($this);
        }

        return $this;
    }

    public function removeBalisong(Balisong $balisongsBlade): self
    {
        if ($this->balisongsBlade->contains($balisongsBlade)) {
            $this->balisongsBlade->removeElement($balisongsBlade);
            // set the owning side to null (unless already changed)
            if ($balisongsBlade->getBladeMaterial() === $this) {
                $balisongsBlade->setBladeMaterial(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Balisong[]
     */
    public function getBalisongsHandle(): Collection
    {
        return $this->balisongsHandle;
    }

    public function addBalisongsHandle(Balisong $balisongsHandle): self
    {
        if (!$this->balisongsHandle->contains($balisongsHandle)) {
            $this->balisongsHandle[] = $balisongsHandle;
            $balisongsHandle->setHandle($this);
        }

        return $this;
    }

    public function removeBalisongsHandle(Balisong $balisongsHandle): self
    {
        if ($this->balisongsHandle->contains($balisongsHandle)) {
            $this->balisongsHandle->removeElement($balisongsHandle);
            // set the owning side to null (unless already changed)
            if ($balisongsHandle->getHandle() === $this) {
                $balisongsHandle->setHandle(null);
            }
        }

        return $this;
    }
}
