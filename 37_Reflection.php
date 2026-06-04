<?php

require_once "exception/1_ValidationException.php";
require_once "data/17_LoginRequest.php";
require_once "helper/3_ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Nadif";
$request->password = "Rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
  public ?String $name;
  public ?String $address;
  public ?String $email;
}

$register = new RegisterUserRequest();
$register->name = "Nadif";
$register->address = "Banyuwangi";
$register->email = "klepon@gmail.com";

ValidationUtil::validateReflection($register);
