<?php

use Data\DogShelter;

require_once "data/9_Animal.php";
require_once "data/15_AnimalShelter.php";
require_once "data/16_Food.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());
