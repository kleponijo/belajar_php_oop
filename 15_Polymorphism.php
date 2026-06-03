<?php

require_once "data/7_Programmer.php";

$company = new Company("Nadif");
var_dump($company);

$company->programmer = new BackendProgrammer("Nadif");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Nadif");
var_dump($company);

sayHelloProgrammer(new Programmer("Nadif"));
sayHelloProgrammer(new BackendProgrammer("Nadif"));
sayHelloProgrammer(new FrontEndProgrammer("Nadif"));
