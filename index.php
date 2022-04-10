<?php

require_once ('src/Controller/MotorWay.php');
require_once ('src/Controller/PedestrianWay.php');
require_once ('src/Controller/ResidentWay.php');
require_once ('src/Controller/Bycicle.php');
require_once ('src/Controller/Car.php');
require_once ('src/Controller/HighWay.php');

$bike = new Bycicle('red', 1);
$dacia = new Car('rouge', 5, 'diesel');
$resident = new ResidentWay(2, 50);
$motor = new MotorWay(4,130);

$motor->addVehicle($bike);
$pedestrian = new PedestrianWay(1,10);

$pedestrian->addVehicle($dacia);
