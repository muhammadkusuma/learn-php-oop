<?php

require_once "data/Person.php";

$person = new Person("Wira","Pekanbaru");
$person->name="Budi";
$person->sayHello("Wira");


$person->info();