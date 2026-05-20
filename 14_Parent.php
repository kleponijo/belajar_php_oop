<?php

require_once "data/6_Shape.php";

use Data\{Shape, Rectangle};

$data = new Shape();
echo $data->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
