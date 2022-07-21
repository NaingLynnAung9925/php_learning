<?php

abstract class Car
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro();
}

interface Model
{
    public function modelName ();
}

class Audi extends Car implements Model
{
    private $modelName;

    public function getModelName()
    {
        return $this->modelName;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }

    public function intro()
    {
        echo "Choose German quality. This is $this->name. <br>";
    }

    public function modelName()
    {
        echo "$this->modelName is sport style of $this->name. ";
    }
}

class Toyota extends Car implements Model
{
    private $modelName;

    public function getModelName()
    {
        return $this->modelName;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }
    public function intro()
    {
        echo "Choose Japan quality. This is $this->name.";
    }
    public function modelName()
    {
        echo "$this->modelName is a luxury type of $this->name ";
    }
}



$audi = new Audi("Audi");
echo $audi->intro();
$audi->setModelName("RS5");
echo $audi->modelName();

$toyota = new Toyota("Toyota");
echo $toyota->intro();
$toyota->setModelName("Crown");
echo $toyota->modelName();