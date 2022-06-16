<?php


new Voiture();


$raspberry=new RaspberryPi;
// Dépendance souhaitée
$sd=new Sd;
$raspberry->setSd($sd);
echo $raspberry;