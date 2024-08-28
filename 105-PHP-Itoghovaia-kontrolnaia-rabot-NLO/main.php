<?php
//     Создайте класс "UFO", который будет иметь магические методы для установки и получения размера, цвета и скорости НЛО. Входными данными будут размер, цвет и скорость, а выходными - соответствующие значения.

//     Входные данные:

// Размер НЛО (например, "большой")
// Цвет НЛО (например, зеленый)
// Скорость НЛО (например, 5000)
//     Выходные данные:

// Размер НЛО
// Цвет НЛО
// Скорость НЛО
// Sample Input:
// большой
// зеленый
// 5000
// Sample Output:
// Размер НЛО: большой
// Цвет НЛО: зеленый
// Скорость НЛО: 5000 км/ч

<?php
class UFO {
    private $size;
    private $color;
    private $speed;

    public function __toString() {
        return "Размер НЛО: {$this->size}\nЦвет НЛО: {$this->color}\nСкорость НЛО: {$this->speed} км/ч";
    }

    public function __get($name) {
        if($name == 'size') {
            return $this->size;
        }
        if($name == 'color') {
            return $this->color;
        }
        if($name == 'speed') {
            return $this->speed;
        }
    }

    public function __set($name, $val) {
        if($name == 'size') {
            $this->size = $val;
        }
        if($name == 'color') {
            $this->color = $val;
        }
        if($name == 'speed') {
            $this->speed = $val;
        }
    }
}

$ufo1 = new UFO();
$ufo1->size = readline();
$ufo1->color = readline();
$ufo1->speed = readline();
echo $ufo1;


