<?php

$count = 4;
for ($i=0; $i <= $count ; $i++) { 
    for ($j=0; $j <= $count ; $j++) { 
        if ($j >= $count - $i && $j <= $count + $i) {
            echo " *";
        }else{
            echo " ";
        }
    }
    echo "\n";
}
for ($i= $count - 1; $i >= 0 ; $i--) { 
    for ($j=0; $j <= $count ; $j++) { 
        if ($j >= $count - $i && $j <= $count + $i) {
            echo " *";
        }else{
            echo " ";
        }
    }
    echo "\n";
}

