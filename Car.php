<?php

class Car {
    private $speed;

    public function __construct(int $newSpeed){
        $this->setSpeed($newSpeed);
    }

    public function setSpeed(int $newSpeed) :void{
        $this->speed = $newSpeed;
    }

    public function getSpeed() :int{
        return $this->speed;
    }

    public function drive($roadType) :void{
        if ($roadType === "highway"){
            $this->setSpeed(75);
        } else {
            $this->setSpeed(30);
        }
    }

    public function brake() :void {
        $this->setSpeed(0);
    }
}

$jetta = new Car(0);
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->drive("highway");
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->drive("city");
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->brake();
echo $jetta->getSpeed() . " MPH" . "<br>";