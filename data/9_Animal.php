<?php

namespace Data;

use Override;

abstract class Animal // harus abstract
{
  public String $name;

  abstract public function run(): void; // gak boleh punya bodym, kalao pengen punya body gak boleh abstract
}

class Cat extends Animal
{
  #[Override]
  public function run(): void
  {
    echo "Cat $this->name is running" . PHP_EOL;
  }
}

class Dog extends Animal
{
  #[Override]
  public function run(): void
  {
    echo "Dog $this->name is running" . PHP_EOL;
  }
}
