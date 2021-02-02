<?php

namespace App\Entity;

use App\Repository\SettingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SettingsRepository::class)
 */
class Settings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="Settings")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?User $User;

    /**
     * @ORM\Column(type="array")
     */
    private array $Settings = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getSettings(): ?array
    {
        return $this->Settings;
    }

    public function setSettings(array $Settings): self
    {
        $this->Settings = $Settings;

        return $this;
    }
}
