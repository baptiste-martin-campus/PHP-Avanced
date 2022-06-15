<?php namespace Park;

final class Plane extends Vehicle {
    static int $speed=0;
    private string $nameCategory;

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

        return "Name Veicule {$this->getName()} , cat: {$this->nameCategory}" . PHP_EOL;
    }

    public function setCategory( string $name):void{

        $this->nameCategory = $name;
    }
}