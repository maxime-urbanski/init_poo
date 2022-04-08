<?php

require_once ('src/Controller/Bycicle.php');
require_once ('src/Controller/Car.php');
require_once ('src/Controller/Truck.php');

$bicyle = new Bycicle('blue', 1);

echo $bicyle->forward();
var_dump($bicyle);

$dacua = new Car('green', 5, 'diesel');
var_dump($dacua);


$renault = new Truck("blue", 3, 0, 'fuel');
$renault->setStockageCapacity(90);
var_dump($renault->getEnergy());
var_dump($renault->isFuel());
$renault->setStockageCapacity(100);
var_dump($renault->isFuel());


