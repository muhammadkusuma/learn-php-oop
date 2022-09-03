<?php

namespace Data\Traits;
trait sayGoodBye{
    public function goodBye(?string $name):void{
        if (is_null($name)){
            echo "Good Bye".PHP_EOL;
        }else{
            echo "Good Bye $name".PHP_EOL;
        }
    }
}

trait sayHello{
    public function hello(?string $name):void{
        if (is_null($name)){
            echo "Hello".PHP_EOL;
        }else{
            echo "Hello $name".PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

class Person{
    use sayGoodBye,sayHello, HasName;
}