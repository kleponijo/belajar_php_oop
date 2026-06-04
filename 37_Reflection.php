<?php

require_once "exception/1_ValidationException.php";
require_once "data/17_LoginRequest.php";
require_once "helper/3_ValidationUtil.php";

$request = new LoginRequest();

ValidationUtil::validate($request);
