<?php

declare(strict_types=1);

namespace App\DAO;

class AnimalDAO extends DAO
{
    public function getAnimals()
    {
        $sql = 'SELECT * FROM animal ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $animals = $result->fetchAll();

        return $animals;
    }

    public function getAnimalById(int $id)
    {
    }
}