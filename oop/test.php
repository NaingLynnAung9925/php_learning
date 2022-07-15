<?php

class Person
{
    public static $age =0;
    public static function plusOne()
    {
        return "The Person's age in now ". ++self::$age . ".<br/>";
    }
}

do
{
    echo Person::plusOne();
}while (Person::$age < 10);