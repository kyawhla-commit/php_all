<?php
class Animal {
    protected $name ;

    public function __construct($name)

    {
        $this->name = $name;    
    }

    static function info() 
    {
        echo "Animal Class <br>";
    }

    public function hello()
    {
        echo "Hello $this->name <br>";
    }
}

class Dog extends Animal 
{
    public function run()
    {
        echo "$this->name is running....<br>";
    }
}


Dog::info();
$dog = new Dog("Booby");
$dog->hello();
$dog->run(); 