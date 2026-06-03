<?php

class Data implements IteratorAggregate
{
  var String $first = "First";
  public String $second = "Second";
  private String $third = "Third";
  protected String $forth = "Forth";

  public function getIterator(): Traversable
  {
    $array = [
      "first" => $this->first,
      "second" => $this->second,
      "third" => $this->third,
      "forth" => $this->forth,
    ];

    return new ArrayIterator($array);
  }
}

$data = new Data();

foreach ($data as $property => $value) {
  echo "$property : $value" . PHP_EOL;
}
