<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $href = null;

    #[ORM\Column(nullable: true)]
    private ?bool $forVisitor = null;

    #[ORM\Column]
    private ?bool $forUser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(nullable: true)]
    private ?bool $forAdminBoard = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adminHref = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
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

    public function isForVisitor(): ?bool
    {
        return $this->forVisitor;
    }

    public function setForVisitor(?bool $forVisitor): self
    {
        $this->forVisitor = $forVisitor;

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

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

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

    public function getAdminHref(): ?string
    {
        return $this->adminHref;
    }

    public function setAdminHref(?string $adminHref): self
    {
        $this->adminHref = $adminHref;

        return $this;
    }

}