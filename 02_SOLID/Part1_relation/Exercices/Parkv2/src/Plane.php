<?php

namespace Park;

final class Plane extends Vehicule
{
    private static float $speed;

    static public function setSpeed(float $speed): void
    {
        // self c'est la classe elle-même 
        self::$speed = $speed;
    }

    static public function getSpeed(): float
    {
        return self::$speed;
    }

    public function __toString(): string
    {
        return "plane";
    }
}
