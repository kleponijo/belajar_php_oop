<?php

class Student
{
  public String $id;
  public String $name;
  public int $value;
  private String $sample;

  public function setSample(String $sample): void
  {
    $this->sample = $sample;
  }

  public function __clone()
  {
    unset($this->sample);
  }

  public function __toString(): String
  {
    return "Student id:$this->id, name:$this->name, value:$this->value" . PHP_EOL;
  }

  public function __invoke(...$arguments): void
  {
    $join = join(",", $arguments);
    echo "Invoke student with arguments $join" . PHP_EOL;
  }
}
