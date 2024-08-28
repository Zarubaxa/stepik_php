<?php
//Напишите задачу на использование стрелочных функций для фильтрации и сортировки массива объектов по нескольким критериям:
//    У нас есть массив объектов, представляющих собой информацию о различных товарах.
//Каждый объект имеет следующие свойства: название, цена, количество, дата добавления.
//Необходимо отфильтровать этот массив по следующим критериям:
//- товары с ценой больше 1000 рублей
//- товары с количеством больше 10 штук
//- товары, добавленные после определенной даты - 01.01.2022
//    Затем отфильтрованный массив необходимо отсортировать по цене (по возрастанию) и по дате добавления (по убыванию).
//Можно решить эту задачу с помощью стрелочных функций в PHP, используя функции array_filter() и usort()в своей среде разработки, так как на степике старая версия php, не содержащая стрелочных функций.
//В выводе должно быть название продукта, пример: Product 7
$products = [
    ['name' => 'Product 1', 'price' => 1500, 'quantity' => 11, 'date_added' => '2022-01-05'],
    ['name' => 'Product 2', 'price' => 800, 'quantity' => 15, 'date_added' => '2022-01-10'],
    ['name' => 'Product 3', 'price' => 1200, 'quantity' => 20, 'date_added' => '2021-12-31'],
    ['name' => 'Product 4', 'price' => 900, 'quantity' => 8, 'date_added' => '2022-01-15'],
];

$result = '';

$filteredArr = array_filter($products, function ($product) {
    if ($product["price"]> 1000 && $product["quantity"]> 10 && $product["date_added"] > '2022-01-01')
        return $product;
});

$priceSortUp = function($price1, $price2) {
    if ($price1["price"] == $price2["price"]) {
      return 0;
    }
    return ($price1["price"] < $price2["price"]) ? -1 : 1;
};   	 
usort($filteredArr, $priceSortUp);


$dateSortDown = function($date1, $date2) {
    if($date1["date_added"] == $date2["date_added"]) {
        return 0;
    }
    return ($date1["date_added"] < $date2["date_added"]) ? 1 : -1;
};
usort($filteredArr, $dateSortDown);

foreach ($filteredArr as $elem) {
    $result .= $elem["name"];
}
echo $result;
