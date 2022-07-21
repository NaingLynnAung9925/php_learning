<?php

class GoodBye
{
    const LEAVING_MESSAGE = "Thanks for your visiting";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$goodBye = new GoodBye;
$goodBye->byebye();




