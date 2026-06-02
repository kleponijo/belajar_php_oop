<?php

require_once "data/2_Manager.php";

$manager = new Manager();
$manager->name = "Nadif";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Budi";
$vp->sayHello("Joko");
