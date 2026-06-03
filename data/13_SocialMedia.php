<!-- final class -->
<?php

class SocialMedia
{
  public String $name;
}

class Facebook extends SocialMedia
{
  final public function login(String $username, String $password): bool
  {
    return true;
  }
}

class FakeFacebook extends Facebook
{

  // error
  // public function login(string $username, string $password): bool
  // {
  //   return false;
  // }
}

// final class Facebook extends SocialMedia {}
// error
// class FakeFacebook extends Facebook {}
