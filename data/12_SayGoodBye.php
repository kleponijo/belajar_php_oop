<?php

namespace Data\traits;

trait SayGoodBye
{

  function goodBye(?String $name): void
  {
    if (is_null($name)) {
      echo "Good bye" . PHP_EOL;
    } else {
      echo "Good bye $name" . PHP_EOL;
    }
  }
}

trait SayHello
{

  function hello(?String $name): void
  {
    if (is_null($name)) {
      echo "hello" . PHP_EOL;
    } else {
      echo "hello $name" . PHP_EOL;
    }
  }
}

class Person
{
  use SayGoodBye, SayHello;
}
