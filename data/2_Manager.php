<?php

class Manager
{

  var String $name;

  function sayHello(String $name): void
  {
    echo "Hai $name my name is Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{

  function sayHello(String $name): void
  {
    echo "Hai $name my name is VP $this->name" . PHP_EOL;
  }
}
