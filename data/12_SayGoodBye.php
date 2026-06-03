<?php

namespace Data\Traits;

use Override;

trait SayGoodBye
{

  function goodBye(?String $name): void
  {
    if (is_null($name)) {
      echo "Good Bye" . PHP_EOL;
    } else {
      echo "Good Bye $name" . PHP_EOL;
    }
  }
}

trait SayHello
{

  function hello(?String $name): void
  {
    if (is_null($name)) {
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
    }
  }
}

trait HasName
{
  public String $name;
}

trait CanRun
{
  public abstract function run(): void;
}

class ParentPerson
{
  public function goodBye(?string $name): void
  {
    echo "Good Bye in Person" . PHP_EOL;
  }


  public function hello(?string $name): void
  {
    echo "Hello in Person" . PHP_EOL;
  }
}

trait All
{
  use SayGoodBye, SayHello, HasName, CanRun {
    // bisa dioverride
    // hello as private;
    // goodBye as private;
  }
}

class Person
{
  use All;

  public function run(): void
  {
    echo "Person $this->name is running" . PHP_EOL;
  }
}
