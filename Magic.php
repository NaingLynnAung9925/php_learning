<?php


class Magic
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name. "<br>";
    }
    public function __destruct()
    {
        echo "My Name is $this->name";
    }
}

$magic =  new Magic("Unknow");
echo $magic->getName();