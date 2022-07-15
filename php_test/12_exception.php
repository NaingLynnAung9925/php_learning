<?php

function checksum($num)
{
    if ($num > 1) {
        throw new Exception("The number must be 1 or below");
    }
    echo "The number is $num";
    return true;
}
try
{
    checksum(1);
    echo "If you see this, The number must be 1 or below";
}
catch(Exception $e)
{
    echo "Message :". $e->getMessage();
}