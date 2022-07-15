<?php

echo "<pre>";

$string = "Hello World";
$x = 5;
$y= 10.5;
$boo = true;

var_dump($string);
var_dump($x);
var_dump($y);


$array = array("first","second","third");

var_dump($array);

$obj = (object) $array;
var_dump($obj);

$z = 'Hello World';
$z = null;

var_dump($z);