<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=2048, nullable=true)
     */
    private $Sumup;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Visibility;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="Children")
     */
    private $Parent;

    /**
     * @ORM\OneToMany(targetEntity=Category::class, mappedBy="Parent", orphanRemoval=true)
     */
    private $Children;

    public function __construct()
    {
        $this->Children = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSumup(): ?string
    {
        return $this->Sumup;
    }

    public function setSumup(?string $Sumup): self
    {
        $this->Sumup = $Sumup;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getVisibility(): ?bool
    {
        return $this->Visibility;
    }

    public function setVisibility(bool $Visibility): self
    {
        $this->Visibility = $Visibility;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->Parent;
    }

    public function setParent(?self $Parent): self
    {
        $this->Parent = $Parent;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getChildren(): Collection
    {
        return $this->Children;
    }

    public function addChild(self $child): self
    {
        if (!$this->Children->contains($child)) {
            $this->Children[] = $child;
            $child->setParent($this);
        }

        return $this;
    }

    public function removeChild(self $child): self
    {
        if ($this->Children->contains($child)) {
            $this->Children->removeElement($child);
            // set the owning side to null (unless already changed)
            if ($child->getParent() === $this) {
                $child->setParent(null);
            }
        }

        return $this;
    }
}
