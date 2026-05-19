<?php

class Manager
{

  var String $name;

  function sayHello(String $name): void
  {
    echo "Hi $name, my name is $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager {}
