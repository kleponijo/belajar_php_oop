<?php

require_once "data/3_Conflict.php";
require_once "data/4_Helper.php";

use Data\One\Conflict;
// use Data\One\Conflict; // error conflict gak bisa
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
