<?php

namespace Data;

use Override;

require_once "16_Food.php";

abstract class Animal // harus abstract
{
  public String $name;

  abstract public function run(): void; // gak boleh punya bodym, kalao pengen punya body gak boleh abstract
  abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{

  public function run(): void
  {
    echo "Cat $this->name is running" . PHP_EOL;
  }

  public function eat(AnimalFood $animalFood): void
  {
    echo "Cat is eating " . PHP_EOL;
  }
}

class Dog extends Animal
{

  public function run(): void
  {
    echo "Dog $this->name is running" . PHP_EOL;
  }

  public function eat(Food $animalFood): void
  {
    echo "Dog is eating" . PHP_EOL;
  }
}
