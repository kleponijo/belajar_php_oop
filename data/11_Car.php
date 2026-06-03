<?php

namespace Data;

use Override;

interface HasBrand
{
  function getBrand(): String;
}

interface IsMaintenance
{
  function isMaintenance(): bool;
}

interface Car extends HasBrand
{

  function drive(): void;
  function getTire(): int;
}

class Avanza implements Car, IsMaintenance
{

  public function drive(): void
  {
    echo "Drive Avanza" . PHP_EOL;
  }

  public function getTire(): int
  {
    return 4;
  }

  public function getBrand(): string
  {
    return "Toyota";
  }

  public function isMaintenance(): bool
  {
    return false;
  }
}
