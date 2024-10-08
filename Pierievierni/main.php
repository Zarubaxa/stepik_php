<?php
//     Напишите функцию, которая принимает на вход строку и возвращает новую строку, в которой каждое слово перевернуто задом наперед, но порядок слов остается неизменным. Например, если входная строка "Hello World", то функция должна вернуть "olleH dlroW".
// Входные данные
//     Строка
// Выходные данные
//     Строка перевернутая задом наперед
// Функция strrev - это встроенная функция в PHP, которая используется для переворачивания строки задом наперед.

$str = "Hello World";

function reverse($text) {
    $arr = explode(" ", $text);
    $result = '';
    foreach($arr as $key => $word) {
        $result .= strrev($word) . " ";
    }
    return $result;
}
echo reverse($str);