<?php

class Product
{
  protected String $name;
  protected int $price;

  public function __construct(String $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  function getName(): String
  {
    return $this->name;
  }
  function getPrice(): int
  {
    return $this->price;
  }
}

class ProductDummy extends Product
{
  public function info()
  {
    echo "Name $this->name" . PHP_EOL;
    echo "Price $this->price" . PHP_EOL;
  }
}
