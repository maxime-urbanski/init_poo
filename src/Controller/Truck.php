<?php

require_once 'Vehicle.php';

class Truck extends \Vehicle
{
    private int $stockageCapacity;
    private int $loadOnStart = 0;
    private string $energy;

    public const ALLOWED_ENERGY = [
        'fuel',
        'electric',
        'hydrogene',
    ];

    public function __construct(string $color, int $nbSeats, int $stockageCapacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStockageCapacity($stockageCapacity);
    }

    public function getLoadOnStart(): int
    {
        return $this->loadOnStart;
    }

    public function setLoadOnStart(int $loadOnStart): void
    {
        $this->loadOnStart = $loadOnStart;
    }

    public function getEnergy (): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGY, true)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStockageCapacity (): int
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    public function isFuel (): string
    {
        if ($this->stockageCapacity >= 100) {
            return 'full';
        }

        return 'in filling';
    }
}
