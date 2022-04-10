<?php

require_once 'HighWay.php';

final class ResidentWay extends HighWay
{
    protected int $maxSpeed = 50;
    protected int $nbLane = 2;

    public function addVehicle(Vehicle $vehicle): array
    {
        $this->setCurrentVehicle($vehicle);
        return $this->currentVehicles;
    }
}
