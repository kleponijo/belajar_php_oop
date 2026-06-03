<?php

interface HelloWorld
{
  function sayHello(): void;
}

$helloWorld = new class("Nadif") implements HelloWorld {

  public String $name;

  public function __construct(String $name)
  {
    $this->name = $name;
  }

  public function sayHello(): void
  {
    echo "Hello {$this->name}" . PHP_EOL;
  }
};
$helloWorld->sayHello();
