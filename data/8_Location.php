<?php

namespace Data;

abstract class Location
{
  public String $name;
}

class City extends Location {}

class Province extends Location {}

class Country extends Location {}
