<?php

class Test
{
    public static $hello = "this is static property";
    public static function greeting()
    {
        echo "Hello World";
    }
}

Test::greeting();

echo Test::$hello;