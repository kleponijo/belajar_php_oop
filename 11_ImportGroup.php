<?php

require_once "data/3_Conflict.php";
require_once "data/4_Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict =  new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
