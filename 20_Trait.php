<?php

require_once "data/12_SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "Nadif";
var_dump($person);
$person->run();
