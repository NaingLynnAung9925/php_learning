<?php

class Car
{
    public $name;

    function getName()
    {
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
}

$car = new Car();
$car->setName("toyota");
echo $car->name;