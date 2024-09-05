<?php
//Создать класс Суперзвезда, у которого есть наследники - Певец, Актер, Танцор. Каждый из них имеет свои особенности и методы, но у всех есть общие свойства: имя, возраст, количество фанатов.
//
//Класс Суперзвезда должен иметь методы для установки и получения значений этих свойств, а также метод для вывода информации о звезде на экран.
//Класс Певец должен иметь свои свойства: количество проданных альбомов, количество наград, жанр музыки. Также у него должны быть методы для установки и получения значений этих свойств, а также метод для вывода информации о певце на экран.
//Класс Актер должен иметь свои свойства: количество снятых фильмов, количество наград, жанр кино. Также у него должны быть методы для установки и получения значений этих свойств, а также метод для вывода информации об актере на экран.
//Класс Танцор должен иметь свои свойства: количество выступлений, количество наград, стиль танца. Также у него должны быть методы для установки и получения значений этих свойств, а также метод для вывода информации о танцоре на экран.
//*Данные не имеют никакого отношения к реальной жизни. Все совпадения случайны.
//Sample Input:
//
//["Мадонна", 62, 1000000, 300000000, 20, "поп"]
//["Джеки Чан", 67, 500000, 200, 10, "боевик"]
//["Майкл Джексон", 50, 2000000, 1000, 30, "поп"]
//Sample Output:
//
//Певец:
//Имя: Мадонна
//Возраст: 62
//Количество фанатов: 1000000
//Количество проданных альбомов: 300000000
//Количество наград: 20
//Жанр музыки: поп
//Актер:
//Имя: Джеки Чан
//Возраст: 67
//Количество фанатов: 500000
//Количество снятых фильмов: 200
//Количество наград: 10
//Жанр кино: боевик
//Танцор:
//Имя: Майкл Джексон
//Возраст: 50
//Количество фанатов: 2000000
//Количество выступлений: 1000
//Количество наград: 30
//Стиль танца: поп

class Superstar
{
    protected $arr;
    protected $name;
    protected $age;
    protected $amountFans;

    public function __construct($arr)
    {
        $this->arr = json_decode($arr);
        $this->name = $this->arr[0];
        $this->age = $this->arr[1];
        $this->amountFans = $this->arr[2];
    }
    public function __toString() {
        return "Имя: " . $this->name . PHP_EOL . "Возраст: " . $this->age . PHP_EOL . "Количество фанатов: " . $this->amountFans;
    }
}
class Singer extends Superstar
{
    private $amountAlboms;
    private $rewards;
    private $genreMusic;

    public function __construct($arr)
    {
        parent::__construct(json_decode($arr));
        $this->amountAlboms = $this->arr[3];
        $this->rewards = $this->arr[4];
        $this->genreMusic = $this->arr[5];
    }

    public function __toString()
    {
        return "Певец:" . PHP_EOL . parent::__toString() . PHP_EOL . "Количество проданных альбомов: " . $this->amountAlboms . PHP_EOL . "Количество наград: " . $this->rewards . PHP_EOL . "Жанр музыки: " . $this->genreMusic;
    }
}
class Actor extends Superstar {
    private $amountMovies;
    private $rewards;
    private $genreMovie;

    public function __construct($arr)
    {
        parent::__construct(json_decode($arr));
        $this->amountMovies = $this->arr[3];
        $this->rewards = $this->arr[4];
        $this->genreMovie = $this->arr[5];
    }
    public function __toString()
    {
        return "Актер:" . PHP_EOL . parent::__toString() . PHP_EOL . "Количество снятых фильмов: " . $this->amountMovies . PHP_EOL . "Количество наград: " . $this->rewards . PHP_EOL . "Жанр кино: " . $this->genreMovie;
    }
}
class Dancer extends Superstar {
    private $amountDancing;
    private $rewards;
    private $danceStyle;

    public function __construct($arr)
    {
        parent::__construct(json_decode($arr));
        $this->amountDancing = $this->arr[3];
        $this->rewards = $this->arr[4];
        $this->danceStyle = $this->arr[5];
    }
    public function __toString()
    {
        return "Танцор:" . PHP_EOL . parent::__toString() . PHP_EOL . "Количество выступлений: " . $this->amountDancing . PHP_EOL . "Количество наград: " . $this->rewards . PHP_EOL . "Стиль танца: " . $this->danceStyle;
    }
}

$singer = new Singer(json_encode(fgets(STDIN)));
$actor = new Actor(json_encode(fgets(STDIN)));
$dancer = new Dancer(json_encode(fgets(STDIN)));
echo $singer . PHP_EOL;
echo $actor . PHP_EOL;
echo $dancer;