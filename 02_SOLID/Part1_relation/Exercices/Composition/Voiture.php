<?php
class Voiture{
    private array $roues;
    public function __construct(){
        $this->roues[] = new Roue(16);
        $this->roues[] = new Roue(16);
        $this->roues[] = new Roue(16);
        $this->roues[] = new Roue(16);
    }

}