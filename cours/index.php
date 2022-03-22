<?php

    require 'Animal.php';
    require 'Maison.php';

$perruche = new Animal('Perruche', 2);
$taureau = new Animal('taureau', 4);
// $perruche->setNom('Perruche');
// $perruche->setNbDePattes(2);

// echo '<pre>';
// var_dump($perruche->coucou());
// echo '</pre>';

// ! Exercice 1
// On a créé la classe maison dans le fichier Maison.php
$chalet = new Maison('Chalet', 19, 125);

// ! Exercice 2
// On a créé des propriétés dans la classe Maison, superficie, type et loyer.
$maison2 = new Maison('Maison', 10000, 1250);

echo '<br>';
$bungalow = new Maison('bungalow', 9, 25);
echo $bungalow->nameIt();
echo '<br>';

echo $maison2::$m2price = 125;
echo '<br>';
echo $bungalow::$m2price;
echo '<br>';
echo $chalet::$m2price;
echo '<br>';