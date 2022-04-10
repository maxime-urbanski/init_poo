<?php

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed) {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    public function getCurrentVehicles(): array {
        return $this->currentVehicles;
    }

    public function setCurrentVehicle(Vehicle $vehicle): void {
        $this->currentVehicles[] = $vehicle;
    }

    public function getNbLane(): int {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle): array;
}
