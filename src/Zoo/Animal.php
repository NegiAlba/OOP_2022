<?php

declare(strict_types=1);

namespace App\Zoo;

class Animal
{
    // ! PROPRIETES

    // private string $nom;
    // private int $nbDePattes;

    // ! METHODES MAGIQUES

    public function __construct(private string $nom, private int $nbDePattes)
    {
        // $this->setNom($nom);
        // $this->setNbDePattes($nbDePattes);
    }

    public function __destruct()
    {
        echo "A plus {$this->getNom()}";
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $newNom): Animal
    {
        if (strlen($newNom) > 3) {
            $this->nom = $newNom;
        }

        return $this;
    }

    /**
     * Get the value of nbDePattes.
     */
    public function getNbDePattes(): int
    {
        return $this->nbDePattes;
    }

    /**
     * Set the value of nbDePattes.
     */
    public function setNbDePattes(int $nbDePattes): self
    {
        $this->nbDePattes = $nbDePattes;

        return $this;
    }

    public function coucou(): string
    {
        return "Coucou petite {$this->getNom()}, tu as $this->nbDePattes pattes";
    }
}

// $db = new PDO();