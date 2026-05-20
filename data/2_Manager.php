<?php

class Manager
{

  var String $name;

  var String $title;

  public function __construct(String $name = "", String $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(String $name): void
  {
    echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{

  public function __construct(string $name = "")
  {
    // tidak wajib tapi direkomendasikan
    parent::__construct($name, "VP");
  }

  function sayHello(String $name): void
  {
    echo "Hi $name, my name is VP $this->name" . PHP_EOL;
  }
}
