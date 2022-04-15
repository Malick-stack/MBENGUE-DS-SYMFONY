<?php

namespace App\Entity;

use App\Repository\PrioriteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrioriteRepository::class)
 */
class Priorite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $faible;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Moyenne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Haute;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFaible(): ?string
    {
        return $this->faible;
    }

    public function setFaible(string $faible): self
    {
        $this->faible = $faible;

        return $this;
    }

    public function getMoyenne(): ?string
    {
        return $this->Moyenne;
    }

    public function setMoyenne(string $Moyenne): self
    {
        $this->Moyenne = $Moyenne;

        return $this;
    }

    public function getHaute(): ?string
    {
        return $this->Haute;
    }

    public function setHaute(string $Haute): self
    {
        $this->Haute = $Haute;

        return $this;
    }
}
