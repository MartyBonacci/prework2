<?php

class Car {
    private $speed;

    public function __construct(){
        $this->setSpeed(0);
    }

    private function setSpeed(int $newSpeed) :void{
        if($newSpeed <= 75) {
            $this->speed = $newSpeed;
        }
//        else{
//            // throw exception because this is too fast
//        }
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

$jetta = new Car();
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->drive("highway");
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->drive("city");
echo $jetta->getSpeed() . " MPH" . "<br>";
$jetta->brake();
echo $jetta->getSpeed() . " MPH" . "<br>";
