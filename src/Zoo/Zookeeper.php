<?php

declare(strict_types=1);

namespace App\Zoo;

class Zookeeper
{
    public function __construct(protected string $nom, protected string $specialite)
    {
    }

    /**
     * Get the value of nom.
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom.
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of specialite.
     */
    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite.
     */
    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }
}