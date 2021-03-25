<?php

namespace App\Entity;

use App\Repository\MailingListRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MailingListRepository::class)
 */
class MailingList
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
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $Sumup;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="array")
     */
    private array $List = [];

    /**
     * @ORM\Column(type="string", length=8)
     */
    private ?string $Type;

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

    public function getDate(): ?DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getList(): ?array
    {
        return $this->List;
    }

    public function setList(array $List): self
    {
        $this->List = $List;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
