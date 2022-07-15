<?php

$x = 1;
while($x <=5){
    echo "The number is $x". "<br>";
    $x++;
}

// For each

$array = [
    "Toyota" => "Corolla",
    "BMW" => "X6",
    "Mazda" => "Mx-5"
];

foreach ($array as $key => $value) {
    echo $key . ":" . $value. "<br>";
}
// For

for($i = 0; $i <= 10; $i++){
    echo "The number is $i". "<br>";
}