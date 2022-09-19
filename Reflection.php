<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request=new LoginRequest();
$request->username="wira";
$request->password="rahasia dong";

//ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register= new RegisterUserRequest();
$register->name="wira";
$register->address="Riau";
$register->email="gakpunyaemail@gmail.com";

ValidationUtil::validateReflection($register);