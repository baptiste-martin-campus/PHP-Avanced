<?php


require_once __DIR__ . '/vendor/autoload.php';

use Park\{Car, Bike, Ferry, Plane, Parking};


Car::setSpeed(180);
Plane::setSpeed(890.5);

$brompton = new Bike('brompton');
$kia = new Car('kia');

$airbus = new Plane('airbus 320');

$parking = new Parking();
$parking->addPark($brompton);
$parking->addPark($kia);
$parking->addPark($airbus); // exception erreur

$ferry= new Ferry($parking);

$telsa =new Car('tesla');
$parking->addPark($telsa);
