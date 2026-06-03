<?php

require_once "data/14_Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Nadif";
$student1->value = 100;
$student1->setSample("XXXX");
var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone
// $student2 = new Student();
// $student2->id = "1";
// $student2->name = "Nadif";
// $student2->value = 100;
// $student2->setSample("XXXX");
// var_dump($student2);

// $student1 => clone $student2 => $student2->__clone()