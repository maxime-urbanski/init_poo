<?php

class Speedometer
{
    private const KM_TO_MILES = 0.621371;

    public static function convertKmToMiles(int $number): int
    {
        return $number * self::KM_TO_MILES;
    }
}
