<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bycicle extends Vehicle implements LightableInterface
{

    public function switchOn(): bool
    {
        if ($this->currentSpeed < 10) {
            throw new Exception('Pédale !');
        }
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
