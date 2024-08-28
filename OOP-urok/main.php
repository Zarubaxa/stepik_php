<?php

// class Person {
//     public $name;
//     public $age;

//     public function sayHello() {
//         echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old."; 
//     }
// }

// $person1 = new Person();
// $person1->name = "John";
// $person1->age = 30;
// $person1->sayHello();

class Person {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$person = new Person();
$person->setName('John Doe');
echo $person->getName(); //John Doe

// 

class Car {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$car = new Car("blue");
echo $car->getColor(); // Выводит "blue"


class Math {
    public function sum($a, $b) {
        return $this->add($a, $b);
    }

    private function add($a, $b) {
        return $a + $b;
    }
}

$math = new Math;
echo $math->sum(2, 3); // Выводит "5"
