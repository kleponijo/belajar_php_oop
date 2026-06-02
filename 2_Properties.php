<?php

require_once "data/1_Person.php";

$person = new Person("Nadif", "Banyuwangi");
$person->name = "Nadif";
$person->address = "Banyuwangi";
// $person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", "Jakarta");
$person2->name = "Budi";
$person2->address = null;
// $person2->country = "Indonesia";

var_dump($person2);

// error 
// $person2->name = [];
