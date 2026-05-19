<?php

require_once "data/1_Person.php";

$nadif = new Person();
$nadif->name = "Nadif";
$nadif->sayHello("Budi");

$joko = new Person();
$joko->name = "Joko";
$joko->sayHello(null);
