<?php

class Person
{
    public $age;
    public function __construct($age)
    {
        $this->age = $age;
        echo 'The class "', __CLASS__ ,'" was initiated!<br/>';
    }
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
    protected function getAge()
    {
        return $this->age. "<br/>";
    }
    public function __tostring()
    {
        echo "Using toString method: ";
        return $this->getAge();
    }
    public function __destruct()
    {
        echo 'The class "', __CLASS__ ,'" was destroyed!';
    }
}

class TallPerson extends Person
{
    public function __construct()
    {
        echo 'The Class "', __CLASS__,'" was initiated! <br/>';
    }
    public function speak()
    {
        echo "I am not just a Person but a ". __CLASS__ . ".<br/>";
    }
    public function callProtectedAge()
    {
        return $this->getAge();
    }
}

$p = new TallPerson();
echo $p->speak();
$p->setAge(30);
echo $p->callProtectedAge();
