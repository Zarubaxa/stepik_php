<?php
// Создайте класс "Железнодорожная станция", который будет иметь магические методы для установки и получения количества пассажиров на станции, количества поездов на станции, списка названий городов, которые обслуживает станция, и списка названий поездов, которые находятся на станции. Входными данными будут количество пассажиров, количество поездов, список городов и список поездов, а выходными - соответствующие значения.

//      Входные данные:

// Количество пассажиров на станции (например, 500)
// Количество поездов на станции (например, 10)
// Список городов, обслуживаемых станцией (например, ["Москва", "Санкт-Петербург", "Казань"])
// Список поездов, находящихся на станции (например, ["Сапсан", "Ласточка", "Стрела"])
//      Выходные данные:

// Количество пассажиров на станции
// Количество поездов на станции
// Список городов, обслуживаемых станцией
// Список поездов, находящихся на станции
// Sample Input:

// 500
// 10
// ["Москва", "Санкт-Петербург", "Казань"]
// ["Сапсан", "Ласточка", "Стрела"]
// Sample Output:

// Количество пассажиров на станции: 500
// Количество поездов на станции: 10
// Список городов, обслуживаемых станцией: Москва, Санкт-Петербург, Казань
// Список поездов, находящихся на станции: Сапсан, Ласточка, Стрела

class RailRoadStation {
    private $amountPeople;
    private $amountTrain;
    private $amountCityService;
    private $amountOnStation;

    public function __get($name) {
        if($name == 'amountPeople') {
            return $this->amountPeople;
        }
        if($name == 'amountTrain') {
            return $this->amountTrain;
        }
        if($name == 'amountCityService') {
            return $this->amountCityService;
        }
        if($name == 'amountOnStation') {
            return $this->amountOnStation;
        }
    }

    public function __set($name, $val) {
        if($name == 'amountPeople') {
            $this->amountPeople = $val;
        }
        if($name == 'amountTrain') {
            $this->amountTrain = $val;
        }
        if($name == 'amountCityService') {
            $this->amountCityService = implode(", ", json_decode($val));
        }
        if($name == 'amountOnStation') {
            $this->amountOnStation = implode(", ", json_decode($val));
        }
    }

    public function __toString() {
        return "Количество пассажиров на станции: {$this->amountPeople}\nКоличество поездов на станции: {$this->amountTrain}\nСписок городов, обслуживаемых станцией: {$this->amountCityService}\nСписок поездов, находящихся на станции: {$this->amountOnStation}";
    }
}

$station = new RailRoadStation();
$station->amountPeople = readline();
$station->amountTrain = readline();
$station->amountCityService = readline();
$station->amountOnStation = readline();

echo $station;