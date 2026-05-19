<?php

require_once "data/1_Person.php";

$person = new Person();
$person->name = "Nadif";
$person->address = "Banyuwangi";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Name : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Budi";
$person2->address = null;

var_dump($person2);

// Error
// $person2->name = [];
