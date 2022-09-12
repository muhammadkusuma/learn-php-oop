<?php

class Zero{
    private array $properties=[];

    public function __get(string $name)
    {
        return $this->properties[$name];
    }

    public function __set(string $name, $value): void
    {
        $this->properties[$name]=$value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
       $join=join(",",$arguments);
       echo "Call function $name with arguments $join".PHP_EOL;
    }

    public static function __callStatic($name,$arguments)
    {
        $join=join(",",$arguments);
        echo "Call static function $name with arguments $join".PHP_EOL;
    }
}

$zero=new Zero();
$zero->firstName="Wira";
$zero->middleName="Ade";
$zero->lastName="Kusuma";

echo "first Name : $zero->firstName".PHP_EOL;
echo "middle Name : $zero->middleName".PHP_EOL;
echo "last Name : $zero->lastName".PHP_EOL;

$zero->sayHello("Wira","Ade");
Zero::sayHello("Wira","Ade");