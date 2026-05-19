<?php

require_once "data/1_Person.php";

$nadif = new Person("Nadif", "Banyuwangi");
$nadif->name = "Nadif";
$nadif->sayHello("Budi");

$joko = new Person("Budi", "Jakarta");
$joko->name = "Joko";
$joko->sayHello(null);

$joko->info();
$nadif->info();
