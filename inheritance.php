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

class Plane extends Car {
    var $wheels = 20;

}
$jet = new Plane();

echo $jet->wheels;

// if(class_exists("Plane")) {
//     echo "it does exist";
// }