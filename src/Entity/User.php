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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="Author", orphanRemoval=true)
     */
    private $Articles;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $Profile;

    public function __construct()
    {
        $this->Settings = new ArrayCollection();
        $this->Articles = new ArrayCollection();
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

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(?string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->Articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->Articles->contains($article)) {
            $this->Articles[] = $article;
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->Articles->contains($article)) {
            $this->Articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getAuthor() === $this) {
                $article->setAuthor(null);
            }
        }

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->Profile;
    }

    public function setProfile(?string $Profile): self
    {
        $this->Profile = $Profile;

        return $this;
    }
}
