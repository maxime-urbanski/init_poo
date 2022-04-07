<?php


class Bycicle
{
    public string $color;
    private int $currentSpeed;
    public int $nbSeats;
    public int $nbWheels;

    public function __construct(string $color, int $speed, int $wheels)
    {
        $this->color = $color;
        $this->currentSpeed= $speed;
        $this->nbWheels = $wheels;
    }


    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go";
    }

    public function brake(): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence.= "Brake !";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentspeed(int $number): int {
        return $this->currentSpeed = $number;
    }
}
