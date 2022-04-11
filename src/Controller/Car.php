<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;

    public const ALLOWED_ENERGY= [
        'fuel',
        'electric',
    ];

    public function __construct (string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake (): bool {
        return $this->hasParkBrake;
    }

    public function setHasParkBreak(): void {
        $this->hasParkBrake = !$this->hasParkBrake;
    }

    public function start () {
        if ($this->hasParkBrake === true) {
           throw new Exception('Attention au frein à main !');
        }
        return $this->forward();
    }
}
