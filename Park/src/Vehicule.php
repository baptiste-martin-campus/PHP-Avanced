<?php
namespace Park;

abstract class Vehicule{

    protected string $status;
    protected string $engine;
    protected string $name;


    public function __construct(string $name){
        $this->name = $name;
    }

    public function setStatus($status){
        $this->status = $status;
    }
    public function getStatus(){
        return $this->status;
    }

    public function __toString(){
        return $this->status;
    }

    abstract public function move();
    abstract public function transport();
}