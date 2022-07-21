<?php

class Person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

}

$bob = new Person('bob');

$alex = clone $bob;
$alex->name = "Alex";

var_dump($bob);
var_dump($alex);