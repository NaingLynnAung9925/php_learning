<?php

class Access
{
    public $name;
    protected $age = 20;
    private $status = false ? "marrried" : "not married";

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getStatus()
    {
        return $this->status;
    }
}

$access = new Access;
$access->setName("Unknow");

echo $access->getName();

echo $access->getAge();

echo $access->getStatus();