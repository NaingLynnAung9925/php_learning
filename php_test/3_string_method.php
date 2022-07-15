<?php

echo "<pre>";
$string = 'Hello World';

echo "Word Length :";
echo strlen($string);
echo "<br>";
echo "Word Reverse :";
echo strrev($string);
echo "<br>";
echo "Word Count :";
echo str_word_count($string);
echo "<br>";
echo "Word Replace :";
echo str_replace("World", "PHP", $string);
echo "<br>";
echo "Word Position :";
echo strpos($string, "World");
echo "<br>";

// Explode

$pizza = "piece1 piece2 piece3 piece4 piece5";
$pieces = explode(" ",$pizza);
$count = count($pieces);
for ($i=0; $i < $count ; $i++) { 
   echo $pieces[$i] . "<br>";
}

// constant

define("GREETING", "Welcome to PHP World");

function myTest(){
    echo GREETING;
}
myTest();