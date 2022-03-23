<?php

declare(strict_types=1);

    spl_autoload_register(function ($class) {
        // ! Nom de la classe
        // ? App\Zoo\Animal
        // Il faudra transformer le nom de la classe afin qu'il corresponde à un chemin qu'on puisse require
        $class = str_replace('\\', '/', $class);

        // 1. On va transformer les '\' en '/'
        // ? App/Zoo/Animal

        $path = '../'.str_replace('App', 'src', $class).'.php';
        // 2. On va remplacer 'App' par 'src' dans le nom de classe et concaténer le retour au dossier parent et l'extension php
        // ? ../src/Zoo/Animal.php

        if (file_exists($path)) {
            require $path;
        }
    });

    $router = new App\Router();

    $router->register('/', function () {
        echo 'This is the homepage';
    });

    $router->register('/about', function () {
        echo 'About page';
    });

    echo $router->resolve($_SERVER['REQUEST_URI']);

    echo '<br>';

    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';