<?php

namespace Data;

require_once "9_Animal.php";

interface AnimalShelter
{
  function adopt(String $name): Animal;
}

class CatShelter implements AnimalShelter
{

  public function adopt(string $name): Cat
  {
    $cat = new Cat();
    $cat->name = $name;
    return $cat;
  }
}

class DogShelter implements AnimalShelter
{

  public function adopt(string $name): Dog
  {
    $dog = new Dog();
    $dog->name = $name;
    return $dog;
  }
}
