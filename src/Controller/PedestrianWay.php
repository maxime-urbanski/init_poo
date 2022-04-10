<?php

require_once 'HighWay.php';

final class PedestrianWay extends \HighWay
{
    public function addVehicle(Vehicle $vehicle): array
    {
        $car = new Car('red',3,"diesel");
        if($vehicle instanceof $car) {
            echo "A pied !" . PHP_EOL;
        }
        $this->setCurrentVehicle($vehicle);
        return $this->currentVehicles;
    }
}
