<?php

require_once "data/10_Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName("      ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
