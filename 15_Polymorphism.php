<?php

require_once "data/7_Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Nadif");
var_dump($company);

$company->programmer = new BackendProgrammer("Nadif");
var_dump($company);

$company->programmer = new FrontendProgrammer("Nadif");
var_dump($company);
