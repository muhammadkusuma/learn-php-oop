<?php

require_once "data/sayGoodBye.php";

use Data\Traits\{Person,sayHello,sayGoodBye};

$person=new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name="Wira";
var_dump($person);