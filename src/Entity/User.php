<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
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
    private $Username;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $Password;

    /**
     * @ORM\Column(type="array")
     */
    private $Roles = [];

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $Lastname;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $Pseudo;

    /**
     * @ORM\OneToMany(targetEntity=Settings::class, mappedBy="User", orphanRemoval=true)
     */
    private $Settings;

    public function __construct()
    {
        $this->Settings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->Roles;
    }

    public function setRoles(array $Roles): self
    {
        $this->Roles = $Roles;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {

    }

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): self
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(?string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    /**
     * @return Collection|Settings[]
     */
    public function getSettings(): Collection
    {
        return $this->Settings;
    }

    public function addSetting(Settings $setting): self
    {
        if (!$this->Settings->contains($setting)) {
            $this->Settings[] = $setting;
            $setting->setUser($this);
        }

        return $this;
    }

    public function removeSetting(Settings $setting): self
    {
        if ($this->Settings->contains($setting)) {
            $this->Settings->removeElement($setting);
            // set the owning side to null (unless already changed)
            if ($setting->getUser() === $this) {
                $setting->setUser(null);
            }
        }

        return $this;
    }
}
