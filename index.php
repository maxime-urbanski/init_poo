<?php

require_once ('src/Controller/Bycicle.php');
require_once ('src/Controller/Car.php');

$rockrider = new Bycicle('black', 56, 3);

var_dump($rockrider);

$rockrider->color = 'red';

$rockrider->setCurrentspeed(25);
var_dump($rockrider->getCurrentSpeed());

echo '<h3> Vitesse du velo: ' . $rockrider->getCurrentSpeed() . ' km/h' . '</h3>';

echo $rockrider->brake();
echo '<h3> Vitesse du velo: ' . $rockrider->getCurrentSpeed() . ' km/h' . '</h3>';
echo $rockrider->brake();


$dacia = new Car('yellow', 5, 'diesel');

var_dump($dacia);

echo '<h3> Energy de al voiture: ' . $dacia->getEnergy() . '</h3>';

