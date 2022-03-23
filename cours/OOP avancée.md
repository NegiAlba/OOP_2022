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
