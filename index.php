<?php

// function custom_autoload($class)
// {
//     require "$class.php";
// }
// spl_autoload_register('custom_autoload');

require 'vendor/autoload.php';

use Acme\Auth\User as User ;
use Acme\Blog\Comment as Comment ;

$user = new User();
$user->greeting();

$comment = new Comment();
$comment->greeting();

// $new = new Get();
// $new->get("Unknow",23);

// $car = new Car();
// $car->setName("Lambo");
// echo $car->getName();

use First\User\One as One;

$one = new One();
$one->one();