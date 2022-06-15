<?php namespace Park;

final class Car extends Vehicle{
    static int $speed;
    private string $namePark;
    private string $place;


    public function speed():float{
        echo "abstract speed";
        return self::$speed;
    }

    public static function setSpeed($speed){
        self::$speed = $speed;
    }
    public static function getSpeed(){
        return self::$speed;
    }

    public function __toString():string
    {

        return "Name Vehicle {$this->getName()} , park : {$this->namePark} place : {$this->place}" . PHP_EOL;
    }

    public function park( string $name, string $place):void{

        $this->namePark = $name;
        $this->place = $place;
    }
}