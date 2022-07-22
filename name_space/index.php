<?php

require "first.php";
require "second.php";
require "third.php";

use First\One as One;
use Second\One as Two;
use Third\One as Three;

$one = new One();
$two = new Two();
$three = new Three();

$one->one();
$two->one();
$three->one();
