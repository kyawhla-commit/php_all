<?php

interface Animal {
    public function hello();

}

class Dog implements Animal {
    public function hello()
    {
        echo "Hello dog <br>";
    }

}


class Cat implements Animal {
    public function hello()
    {
        echo "Hello cat <br>";
    }
}

function app(Animal $obj) {
    $obj->hello();
}

app(new Cat);
app(new Dog);