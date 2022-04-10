<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle): array
    {
        $bike = new Bycicle('blue',1);
        if ($vehicle instanceof $bike) {
            echo "interdit sur l'autoroute !!" . PHP_EOL;
        }
        $this->setCurrentVehicle($vehicle);
        return $this->currentVehicles;
    }
}
