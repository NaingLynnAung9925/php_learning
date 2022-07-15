<?php

$x = 20;
if ($x > 20) {
    echo "$x is not greater than 20";
}elseif ($x < 20) {
    echo "$x is not less than 20";
}else {
    echo "$x is equal 20";
}

echo "<br>";
// Switch

$color = "black";

switch($color){
    case "red":
        echo "Your Favorite color is red";
        break;
    case "blue":
        echo "Your Favorite color is blue";
        break;
    default:
        echo "Your Favorite color is $color";
}