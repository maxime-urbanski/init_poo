<?php


abstract class Vehicle
{
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return 'Go !';
    }

    public function brake(): string
    {
        $sentence = '';

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence = "Brake";
        }
        $sentence .= "I'm Stopped";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {   if ($currentSpeed > 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(string $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(string $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
