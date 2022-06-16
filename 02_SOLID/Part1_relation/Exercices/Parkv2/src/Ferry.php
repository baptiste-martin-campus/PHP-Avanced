<?php

use Park\Parking;
use Park\Vehicule;

class Ferry extends Vehicule{

    private static float $speed;

    private Parking $parking;
    public function __construct($parking){

        $this->parking =$parking;


    }

    static public function setSpeed(float $speed): void
    {
        // self c'est la classe elle-même 
        self::$speed = $speed;
    }

    static public function getSpeed(): float
    {
        return self::$speed;
    }


}