<?php

class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty() {
        echo $this->hood;
    }

    function createDoors() {
        $this->doors = 2;
    }
}

$bmw = new Car();
$semi = new semi();
// $bmw->showProperty();

class semi extends Car{
 
}

$bmw->showProperty();
