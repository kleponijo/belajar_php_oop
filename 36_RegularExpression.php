<?php

$matches = [];
$result = preg_match_all("/nadif|idan|aka/i", "Nadif Zidan Tazaka", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Nadif Zidan Tazaka, Programmer, Zaman-Now");

var_dump($result);
