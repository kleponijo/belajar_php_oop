<?php

class Programmer
{
  public String $name;
  public function __construct(String $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer {}

class FrontendProgrammer extends Programmer {}

class Company
{
  public Programmer $programmer;
}
