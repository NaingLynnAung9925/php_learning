<?php

require_once("Person.php");

// class Myclass
// {
//     public $age = 28;
//     public function setAge($newAge){
//       $this->age = $newAge;
//     }
//     public function getAge(){
//         return $this->age;
//     }
// }

// $p = new Myclass;
// $p->setAge(20);
// echo $p->getAge();

// echo "<br>";
// $person = new Myclass;
// $person->setAge(59);
// echo $person->getAge();




$p = new Person(20);
echo $p->getAge();