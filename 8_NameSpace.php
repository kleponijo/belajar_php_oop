<?php

// global namespace
namespace {
  require_once "data/3_Conflict.php";
  require_once "data/4_Helper.php";

  $conflict1 = new Data\One\Conflict();
  $conflict2 = new Data\Two\Conflict();

  echo Helper\APPLICATION . PHP_EOL;
  Helper\helpMe();
}
