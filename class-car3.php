<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {

        $this->wheels = 10;
    }

    function createDoors() {
        $this->doors = 2;
    }
}

$bmw = new Car();
$truck = new Car();

// echo $bmw->wheels . "<br>";
// echo $truck->wheels = 10 . "<br>";

$truck->moveWheels();
echo $truck->wheels;




?>