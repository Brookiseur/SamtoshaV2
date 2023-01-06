<?php

namespace App\Entity;

use App\Repository\SubmenusRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubmenusRepository::class)]
class Submenus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $href = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $child = null;

    #[ORM\Column]
    private ?bool $forUser = null;

    #[ORM\Column]
    private ?bool $forAdmin = null;

    #[ORM\Column(nullable: true)]
    private ?bool $forAdminBoard = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;

        return $this;
    }

    public function getChild(): ?string
    {
        return $this->child;
    }

    public function setChild(?string $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function isForUser(): ?bool
    {
        return $this->forUser;
    }

    public function setForUser(bool $forUser): self
    {
        $this->forUser = $forUser;

        return $this;
    }

    public function isForAdmin(): ?bool
    {
        return $this->forAdmin;
    }

    public function setForAdmin(bool $forAdmin): self
    {
        $this->forAdmin = $forAdmin;

        return $this;
    }

    public function isForAdminBoard(): ?bool
    {
        return $this->forAdminBoard;
    }

    public function setForAdminBoard(?bool $forAdminBoard): self
    {
        $this->forAdminBoard = $forAdminBoard;

        return $this;
    }

}
