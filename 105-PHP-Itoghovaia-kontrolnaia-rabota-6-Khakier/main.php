<?php
//     Создать класс "Хакер", который будет иметь следующие свойства и методы:
//     Свойства:
// имя хакера
// уровень доступа (от 1 до 10)
// список взломанных сайтов
// список украденных данных
//     Методы:
// взлом сайта (добавление сайта в список взломанных)
// кража данных (добавление данных в список украденных)
// проверка доступа к сайту (сравнение уровня доступа хакера с уровнем доступа сайта)
// Будем считать, что уровень доступа к сайту = 7 
// Sample Input:

// Alex
// 8
// ["google.com", "facebook.com"]
// ["пароли пользователей", "личные данные"]
// Sample Output:

// Список взломанных сайтов: ['google.com', 'facebook.com']
// Список украденных данных: ['пароли пользователей', 'личные данные']
// Хакер Alex имеет доступ к сайту с уровнем доступа 7: Да

class Hacker {
    private $user;
    private $level;
    public $hackedList;
    public $stolenData;

    public function __set($name, $val) {
        if($name == 'user') {
            $this->user = $val;
        }
        if($name == 'level') {
            $this->level = $val;
        }
    }
    public function __get($name) {
        if($name == 'user') {
            return $this->user;
        }
        if($name == 'level') {
            return $this->level;
        }
    }

    public function addToHacked($hackedList) {
        $this->hackedList = str_replace("\"", "'", $hackedList);
    }
    public function addToStolen($stolenData) {
        $this->stolenData = $stolenData;
    }

    // public function __toString() {
    //     return "Список взломанных сайтов: {$this->hackedList}\nСписок украденных данных: {$this->stolenData}\nХакер {$this->user} имеет доступ к сайту с уровнем доступа 7: " . (($this->level >= 7) ? 'Да' : 'Нет');
    // }
}

$man = new Hacker();
// $man->user = readline();
// $man->level = readline();
$man->addToHacked(readline());
// $man->addToStolen(readline());
echo $man->hackedList;