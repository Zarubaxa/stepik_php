<?php
// Напишите класс "Человек" на PHP, который будет иметь конструктор и деструктор, и принимать следующие входные данные: имя, возраст и пол. Класс должен иметь методы для вывода имени, возраста и пола человека.

//     Входные данные:

// Имя человека
// Возраст человека
// Пол человека
//     Выходные данные:

// Человек создан
// Имя человека
// Возраст человека
// Пол человека
// Человек кикнут
// Sample Input:

// Иван
// 25
// мужской
// Sample Output:

// Человек Иван создан
// Имя: Иван
// Возраст: 25
// Пол: мужской
// Человек Иван кикнут

$a = readline();
$b = readline();
$c = readline();
class Human {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        echo "Человек {$this->name} создан" . PHP_EOL;  
    }
    

    public function __destruct() {
        echo "Человек {$this->name} кикнут";
    }

    public function showName() {
        echo "Имя: {$this->name}" . PHP_EOL;
    }
    public function showAge() {
        echo "Возраст: {$this->age}" . PHP_EOL;
    }
    public function showGender() {
        echo "Пол: {$this->gender}" . PHP_EOL;
    }
    
}

$newHuman = new Human($a, $b, $c);
$newHuman->showName();
$newHuman->showAge();
$newHuman->showGender();