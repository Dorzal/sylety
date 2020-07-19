<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Formateur::class, inversedBy="formations")
     */
    private $formateur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $coutFormation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $coutFormateur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $salleChargee;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $consommable;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $consoAdministratif;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $nbKm;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totalCharges;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $benefice;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxPersonne;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $txRemplissage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getFormateur(): ?Formateur
    {
        return $this->formateur;
    }

    public function setFormateur(?Formateur $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCoutFormation(): ?float
    {
        return $this->coutFormation;
    }

    public function setCoutFormation(?float $coutFormation): self
    {
        $this->coutFormation = $coutFormation;

        return $this;
    }

    public function getCoutFormateur(): ?float
    {
        return $this->coutFormateur;
    }

    public function setCoutFormateur(?float $coutFormateur): self
    {
        $this->coutFormateur = $coutFormateur;

        return $this;
    }

    public function getSalleChargee(): ?float
    {
        return $this->salleChargee;
    }

    public function setSalleChargee(?float $salleChargee): self
    {
        $this->salleChargee = $salleChargee;

        return $this;
    }

    public function getConsommable(): ?float
    {
        return $this->consommable;
    }

    public function setConsommable(?float $consommable): self
    {
        $this->consommable = $consommable;

        return $this;
    }

    public function getConsoAdministratif(): ?float
    {
        return $this->consoAdministratif;
    }

    public function setConsoAdministratif(?float $consoAdministratif): self
    {
        $this->consoAdministratif = $consoAdministratif;

        return $this;
    }

    public function getNbKm(): ?float
    {
        return $this->nbKm;
    }

    public function setNbKm(?float $nbKm): self
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    public function getTotalCharges(): ?float
    {
        return $this->totalCharges;
    }

    public function setTotalCharges(?float $totalCharges): self
    {
        $this->totalCharges = $totalCharges;

        return $this;
    }

    public function getBenefice(): ?float
    {
        return $this->benefice;
    }

    public function setBenefice(?float $benefice): self
    {
        $this->benefice = $benefice;

        return $this;
    }

    public function getMaxPersonne(): ?int
    {
        return $this->maxPersonne;
    }

    public function setMaxPersonne(int $maxPersonne): self
    {
        $this->maxPersonne = $maxPersonne;

        return $this;
    }

    public function getTxRemplissage(): ?float
    {
        return $this->txRemplissage;
    }

    public function setTxRemplissage(?float $txRemplissage): self
    {
        $this->txRemplissage = $txRemplissage;

        return $this;
    }
}
