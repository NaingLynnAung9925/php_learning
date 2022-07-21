<?php

class Brand
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return "Car Brand Name is $this->name. ";
    }
}

class Car extends Brand
{
    protected $subName;
    public function car()
    {
        echo "$this->subName is a sub-brand of $this->name";
    }
    public function setSubName($subName)
    {
        $this->subName = $subName;
    }

    public function getSubName()
    {
        return $this->subName;
    }
}

$car = new Car("Toyota");
echo $car->setSubName("Lexus");
echo $car->car();