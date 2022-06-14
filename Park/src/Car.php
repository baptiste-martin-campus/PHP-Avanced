<?php
namespace Park;

class Car extends Vehicule{

   

    public function __construct(string $name){
        parent::__construct($name);
       
    }

    public function move(){

    }

    abstract public function move();
}