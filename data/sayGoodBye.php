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

trait CanRun{
    public abstract function run():void;
}

class ParentPerson{
    public function goodBye(?string $name): void
    {
        echo "Good by in person".PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in person".PHP_EOL;
    }
}
class Person extends ParentPerson {
    use sayGoodBye,sayHello, HasName,CanRun{
//        bisa di override
//        hello as private;
//        goodBye as private;
    }

    public function run():void{
        echo "Person $this->name is running".PHP_EOL;
    }


}