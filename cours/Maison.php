<?php

declare(strict_types=1);

class Maison
{
    // private string $type;
    // private int $superficie;
    // private int $loyer;

    public static $m2price = 100;

    public function __construct(private string $type, private int $superficie, private int $loyer)
    {
        $this->type = $type;
        $this->superficie = $superficie;
        $this->loyer = $loyer;
    }

    // Getters & Setters

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $newType): self
    {
        $this->type = $newType;

        return $this;
    }

    /**
     * Get the value of superficie.
     */
    public function getSuperficie(): int
    {
        return $this->superficie;
    }

    /**
     * Set the value of superficie.
     */
    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get the value of loyer.
     */
    public function getLoyer(): int
    {
        return $this->loyer;
    }

    /**
     * Set the value of loyer.
     */
    public function setLoyer(int $loyer): self
    {
        $this->loyer = $loyer;

        return $this;
    }

    public function nameIt()
    {
        return 'The little '.ucfirst($this->getType()).' on the prairie';
    }
}