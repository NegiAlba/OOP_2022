# OOP Avandée

## Les namespaces

Le namespace est un environnement dans lequel on pourra définir des classes.

Les namespaces sont des environnements d'exécution du code qui fonctionnent comme des couches (layers). Par défaut le namespace est le namespace global, c'est à dire que c'est l'environnement qui englobe toute votre application. Toutes les classes sont déclarées dans le même environnement par défaut : le namespace global de PHP qui contient les classes génériques de PHP (Date, PDO, Exception par exemple). Créer un nouveau namespace sert à profiter d'un environnement stérile et libre de toutes variables/méthodes/fonctions.

## Autoloading

L'autoloading consiste à créer une fonction qui va chercher les fichiers de classes et les require à partir du moment où ils sont appelés sur la page.
La fonction PHP `spl_autoload_register()` est une fonction qui reçoit comme argument une callback qui reçoit le nom complet de la classe. (Par nom complet, il faut comprendre le nom de la classe préfixé de son namespace)

Par conséquent on peut soit créer cette fonction au préalable et l'introduire comme callback dans la fonction spl_autoload_register(), ou alors créer une fonction anonyme dans spl_autoload_register (exemple ci-dessous)

```php
    spl_autoload_register(function ($class) {
        $class = str_replace('\\', '/', $class);
        $path = '../'.str_replace('App', 'src', $class).'.php';
        require $path;
    });
```

L'autoloading permet de ne pas avoir à se soucier de l'instruction require sur chaque classe.

Comment gérer l'autoloading de classes que j'aurais installé en dépendances de mon projet ?

Composer permet de générer un autoloader performant, qui peut non seulement charger automatiquement les classes des dépendances mais aussi celle que j'aurais crée par moi même.

## Classes abstraites

Une classe abstraite est une classe qui ne peut pas être étendue et dont l'objectif réside dans le fait de créer des classes enfants qui vont hériter de ses propriétés et de ses méthodes.
Les classes abstraites servent de schémas à leur enfants et permettent de diriger leurs comportements.

Pour créer une classe abstraite il suffit de créer une classe et de la préfixer avec abstract

```php
abstract class Maison
{
}
```

On peut aussi créer des méthodes abstraites, qui doivent forcément être définies par les classes enfants afin de préciser une fonctionnalité qui doit être customisée mais qui doit exister nécessairement.

## Propriétés et méthodes statiques

Il arrive parfois que nous ayons besoin d'une seule instance d'une classe afin de gérer du contenu sur une page. Toutefois cette instance n'est pas nécessairement garantie être unique et c'est là qu'intervient le mot clé `static`.
Une propriété statique ne peut exister qu'en un seul exemplaire et sera partagé entre toutes instances de la classe possédant cette propriété statique.
Une propriété statique se déclare avec le mot clé **static** et est appelée avec l'opérateur de résolution de portée (ou Paamayim Nekutodayim ) **::**.

```php
class Animal
{
    private static $staticProp;
    echo Animal::$staticProp;
}
```

## Les DAO ou Data Access Objects

Les DAO sont des classes qui servent à réaliser des transactions sur les objets.
Il ne doit y avoir qu'un seul DAO par classe à gérer.
De manière générale on utilise aussi une classe **abstraite** DAO qui va contenir les informations partagées entre les classes DAO (notamment la connexion à la BDD, ou le créateur de requêtes)

C'est dans ces DAO que l'on retrouve généralement le CRUD des objets.
Chaque méthode représente une des transactions acceptables sur les objets, elles seront donc créées en fonction du besoin de l'application
