<?php

namespace App\Entity;

use App\Repository\MerciRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MerciRepository::class)]
class Merci
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $fromEmployee = null;

    #[ORM\Column(length: 30)]
    private ?string $toEmployee = null;

    #[ORM\Column(length: 255)]
    private ?string $reason = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $thankDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromEmployee(): ?string
    {
        return $this->fromEmployee;
    }

    public function setFromEmployee(string $fromEmployee): static
    {
        $this->fromEmployee = $fromEmployee;

        return $this;
    }

    public function getToEmployee(): ?string
    {
        return $this->toEmployee;
    }

    public function setToEmployee(string $toEmployee): static
    {
        $this->toEmployee = $toEmployee;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    public function getThankDate(): ?\DateTimeInterface
    {
        return $this->thankDate;
    }

    public function setThankDate(\DateTimeInterface $thankDate): static
    {
        $this->thankDate = $thankDate;

        return $this;
    }
}
