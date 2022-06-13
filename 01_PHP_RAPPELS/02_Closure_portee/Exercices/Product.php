<?php



class Product
{

    private float $price;
    private int $quantity;
    private string $name;

    //méthode magique
    public function __construct(string $name, float $price,  int $quantity) {
        //hydratation ( remplissage des propriétés )
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function setPrice(){

    }
    public function getPrice(){

    }
    public function total()
    {
        return $this->price * $this->quantity;
    }
}
//instance : fabrication d'un objet à partir de sa classe
$voiture = new Product("fiat", 10000, 3);
$voiture2 = new Product("volvo", 20000, 2);
$voiture->setPrice(54);
