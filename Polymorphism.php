<?php

require_once "data/Programmer.php";

$company=new Company();
$company->programmer=new Programmer("Wira");
var_dump($company);
$company->programmer=new BackendProgrammer("Wira");
var_dump($company);
$company->programmer=new FrontendProgrammer("Wira");
var_dump($company);

sayHello(new Programmer("Wira"));
sayHello(new BackendProgrammer("Wira"));
sayHello(new FrontendProgrammer("Wira"));

