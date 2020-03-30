<?php

class Snowboard {
    private $price;
    private $cost;

    // constructor method
    public function __construct(float $newPrice, float $newCost){
        $this->setPrice($newPrice);
        $this->setCost($newCost);
    }

    // setters
    public function setPrice(float $newPrice) :void{
        $this->price = $newPrice;
    }
    public function setCost(float $newCost) :void{
        $this->cost = $newCost;
    }

    // getters
    public function getPrice() :float{
        return ($this->price);
    }
    public function getCost() :float{
        return ($this->cost);
    }

    // profit method
    public function profit(){
        return ($this->price - $this->cost);
    }
}
$customSnowboard = new Snowboard(897.97, 472.83);
echo $customSnowboard->getPrice() . " - ";
echo $customSnowboard->getCost() . " = ";
echo $customSnowboard->profit();



