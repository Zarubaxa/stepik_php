<?php
//     Дан массив $arr с данными о продажах товаров в интернет-магазине за последние 30 дней. 
// Каждый элемент массива представляет собой ассоциативный массив с ключами "product" (название товара) и "sales" (количество продаж за день).
//     Нужно найти топ-5 товаров по количеству продаж за этот период и вывести их в порядке убывания.
// Sample Output:
// Товар 4: 35
// Товар 5: 28
// Товар 2: 23
// Товар 1: 22
// Товар 3: 6


// $data[] = array('volume' => 67, 'edition' => 2);
// $data[] = array('volume' => 86, 'edition' => 1);
// $data[] = array('volume' => 85, 'edition' => 6);
// $data[] = array('volume' => 98, 'edition' => 2);
// $data[] = array('volume' => 86, 'edition' => 6);
// $data[] = array('volume' => 67, 'edition' => 7);
// foreach ($data as $key => $row) {
//     $edition[$key] = $row['edition'];
// }
// array_multisort($edition, SORT_ASC, $data);
// print_r($data);


$arr = array(
    array("product" => "Товар 1", "sales" => 10),
    array("product" => "Товар 2", "sales" => 15),
    array("product" => "Товар 3", "sales" => 6),
    array("product" => "Товар 2", "sales" => 8),
    array("product" => "Товар 4", "sales" => 20),
    array("product" => "Товар 1", "sales" => 12),
    array("product" => "Товар 5", "sales" => 18),
    array("product" => "Товар 4", "sales" => 15),
    array("product" => "Товар 6", "sales" => 5),
    array("product" => "Товар 5", "sales" => 10),
);
$str = '';

$arr2 = [];
foreach($arr as $key => $elem) {
    $sales = $elem['sales'];
    $product = $elem['product'];

    if(isset($arr2[$product])) {
        $arr2[$product] += $sales; 
    } else {
        $arr2[$product] = $sales; 
    }
    
    
}
arsort($arr2);

$newArr = array_slice($arr2, 0, 5, true);

foreach($newArr as $key => $elem) {
    $str .= $key . ": " . $elem . "\n";
}
echo $str;