<?php

declare(strict_types=1);

namespace App\DAO;

use PDO;
use PDOStatement;

abstract class DAO
{
    protected static \PDO $dao;

    public function __construct(string $config = 'mysql:host=localhost;dbname=oopzoo;', string $user = 'root', string $password = '')
    {
        // ? Avec self:: Il appellera forcément la valeur qui est définie dan sla classe parent
        // ? Avec static, il utilisera la valeur la plus récemment déclarée (en l'occurence l'enfant)
        // ! Self , $dao = PDO
        // ! Static, $dao = 'Salut'
        try {
            static::$dao = new \PDO($config, $user, $password);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }

    protected function __clone()
    {
    }

    public function getStaticDao(): PDO
    {
        // ? Vérifier si le DAO est initalisé, lancer constructor si non, sinon retourner la prop static dao
        if (!static::$dao) {
            DAO::__construct();
        }

        return static::$dao;
    }

    protected function createQuery(string $sql, $params = null): PDOStatement|bool
    {
        $result = $this->getStaticDao()->prepare($sql);
        $result->execute($params);

        return $result;
    }
}