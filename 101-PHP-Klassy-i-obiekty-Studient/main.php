<?php
//  Создайте класс "Студент", который будет содержать следующую информацию о студенте:

// ФИО (поле)
// Группа (поле)
// Средний балл (поле)
// Метод "Вывести информацию" (метод, который будет выводить на экран ФИО, группу и средний балл студента)
// Sample Input:

// Иванов Иван Иванович
// Группа 1
// 4.5
// Sample Output:

// ФИО: Иванов Иван Иванович
// Группа: Группа 1
// Средний балл: 4.5

class Student {
    public $fio;
    public $group;
    public $average;

    public function showInfo() {
        echo "ФИО: " . $this->fio . "\n" . "Группа: " . $this->group . "\n" . "Средний балл: " . $this->average;
    }
}

$student1 = new Student();
$student1->fio = readline();
$student1->group = readline();
$student1->average = readline();
$student1->showInfo();
