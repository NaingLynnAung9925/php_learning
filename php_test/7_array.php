<?php

$cars =  array("Volvo","Toyota","BMW");

$arrLength = count($cars);
for($i = 0;$i < $arrLength; $i++){
    echo $cars[$i]. "<br>";
}

// Associated Array

$ages = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "41"
);

echo "Peter is" . $ages["Peter"] . "years old";
echo "<br>";

foreach($ages as $name => $age){
    echo "Name =>" . $name . ", " . "Age =>" . $age . "<br>";
}