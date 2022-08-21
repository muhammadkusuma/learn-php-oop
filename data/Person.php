<?php

class Person{
    const AUTHOR="M. Wira Ade Kusuma";

    var string $name;
    var ?string $address=null;
    var string $country="Indonesia";

    function sayHello(?string $name){
        if (is_null($name)){
            echo "Hi, my name is {$this->name}".PHP_EOL ;
        } else {
            echo "Hello $name, my name is {$this->name}".PHP_EOL;
        }
    }
}