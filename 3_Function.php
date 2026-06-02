<?php

require_once "data/1_Person.php";

$nadif = new Person("Nadif", "Banyuwangi");
$nadif->name = "Nadif";
$nadif->sayHello("Budi");

$joko = new Person("Budi", null);
$joko->name = "Jokow*";
$joko->sayHello(null);

$nadif->info();
$joko->info();
