<?php

class Person
{

  const AUTHOR = "Klepon Ijo";

  var String $name;
  var ?String $address = null;
  var String $country = "Indonesia";

  function __construct(String $name, ?String $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  function sayHello(?String $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is $this->name" . PHP_EOL;
    } else {
      echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
    echo "Hello $name" . PHP_EOL;
  }

  function info()
  {
    echo "Author : " . self::AUTHOR . PHP_EOL;
  }

  function __destruct()
  {
    echo "Object Person $this->name is destroyed" . PHP_EOL;
  }
}
