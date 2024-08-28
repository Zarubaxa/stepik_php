<?php
// Напишите класс "Калькулятор", который будет иметь следующие методы:
// Метод "сложение" (addition), который принимает два числа и возвращает их сумму.
// Метод "вычитание" (subtraction), который принимает два числа и возвращает их разность.
// Метод "умножение" (multiplication), который принимает два числа и возвращает их произведение.
// Метод "деление" (division), который принимает два числа и возвращает их частное.
// Sample Input:
// 10
// 5
// Sample Output:
// 15
// 5
// 50
// 2

class Calculate {
    public function addition($a, $b) {
        echo $a + $b . "\n";
    }
    public function subtraction($a, $b) {
        echo $a - $b . "\n";
    }
    public function multiplication($a, $b) {
        echo $a * $b . "\n";
    }
    public function division($a, $b) {
        echo $a / $b . "\n";
    }
}

$first = readline();
$second = readline();
$calc = new Calculate();
$calc->addition($first, $second);
$calc->subtraction($first, $second);
$calc->multiplication($first, $second);
$calc->division($first, $second);