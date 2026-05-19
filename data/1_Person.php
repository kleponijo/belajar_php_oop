<?php

class person
{
  var String $name;
  var ?String $address = null;
  var String $country = "Indonesia";

  function sayHello(?String $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is $this->name" . PHP_EOL;
    } else {
      echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
    echo "Hello $name" . PHP_EOL;
  }
}
