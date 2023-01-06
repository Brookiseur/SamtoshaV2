<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $tarif = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $horaireDeDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $horaireDeFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $day = null;

    #[ORM\Column(nullable: true)]
    private ?int $participantMin = null;

    #[ORM\Column(nullable: true)]
    private ?int $participantMax = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'cours')]
    private Collection $User;

    #[ORM\Column(nullable: true)]
    private ?bool $presentation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(nullable: true)]
    private ?bool $actualite = null;

    public function __construct()
    {
        $this->User = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getHoraireDeDebut(): ?\DateTimeInterface
    {
        return $this->horaireDeDebut;
    }

    public function setHoraireDeDebut(?\DateTimeInterface $horaireDeDebut): self
    {
        $this->horaireDeDebut = $horaireDeDebut;

        return $this;
    }

    public function getHoraireDeFin(): ?\DateTimeInterface
    {
        return $this->horaireDeFin;
    }

    public function setHoraireDeFin(?\DateTimeInterface $horaireDeFin): self
    {
        $this->horaireDeFin = $horaireDeFin;

        return $this;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(?string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getParticipantMin(): ?int
    {
        return $this->participantMin;
    }

    public function setParticipantMin(?int $participantMin): self
    {
        $this->participantMin = $participantMin;

        return $this;
    }

    public function getParticipantMax(): ?int
    {
        return $this->participantMax;
    }

    public function setParticipantMax(?int $participantMax): self
    {
        $this->participantMax = $participantMax;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUser(): Collection
    {
        return $this->User;
    }

    public function addUser(User $user): self
    {
        if (!$this->User->contains($user)) {
            $this->User->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->User->removeElement($user);

        return $this;
    }

    public function isPresentation(): ?bool
    {
        return $this->presentation;
    }

    public function setPresentation(?bool $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isActualite(): ?bool
    {
        return $this->actualite;
    }

    public function setActualite(?bool $actualite): self
    {
        $this->actualite = $actualite;

        return $this;
    }
}
