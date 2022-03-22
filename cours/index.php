<?php

    require 'Animal.php';

$perruche = new Animal('Perruche', 2);
$taureau = new Animal('taureau', 4);
// $perruche->setNom('Perruche');
// $perruche->setNbDePattes(2);

echo '<pre>';
var_dump($perruche->coucou());
echo '</pre>';