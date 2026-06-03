<?php

require_once "helper/1_MathHelper.php";

use Helper\{MathHelper};

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Nadif Zidan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
