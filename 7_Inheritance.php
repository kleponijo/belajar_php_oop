<?php

require_once "data/2_Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Nadif";
$vp->sayHello("Joko");
