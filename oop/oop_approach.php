<?php

class Person
{
    private $_name;
    private $_job;
    private $_age;
    
    public function __construct($name, $job, $age)
    {
        $this->_name = $name;
        $this->_job = $job;
        $this->_age = $age;
    }
    public function changeJob($newjob)
    {
        $this->_job = $newjob;
    }
    public function happyBirthday()
    {
        ++$this->_age;
    }
}

$person1 = new Person("Aung","BBc",33);
$person2 = new Person("Kyaw","Boxer",33);

echo "<pre> Person 1: ", print_r($person1,TRUE), "</pre>";
echo "<pre> Person 2: ", print_r($person2,TRUE), "</pre>";

$person1->changeJob("Box-Mover");
$person1->happyBirthday();

echo "<pre> Person 1: ", print_r($person1,TRUE), "</pre>";
echo "<pre> Person 2: ", print_r($person2,TRUE), "</pre>";