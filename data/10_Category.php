<?php

class Category
{
  private String $name;
  private bool $expensive;

  public function getName(): String
  {
    return $this->name;
  }

  public function setName(String $name): void
  {
    if (trim($name) != "") {
      $this->name = $name;
    }
  }

  public function isExpensive(): bool
  {
    return $this->expensive;
  }

  public function setExpensive(bool $expensive): void
  {
    $this->expensive = $expensive;
  }
}
