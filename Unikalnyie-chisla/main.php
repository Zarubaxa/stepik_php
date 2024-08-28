<?php
//     Напишите функцию, которая принимает на вход массив чисел и возвращает новый массив, состоящий только из уникальных чисел, отсортированный по возрастанию.
// Входные данные
//     Массив чисел
// Выходные данные
//     Уникальные числа, отсортированные по возрастанию
// Sample Input 1:
// 5 2 7 2 9 5 1
// Sample Output 1:
// 1 2 5 7 9
// Sample Input 2:
// 13 12 55 12 34 12 98 34
// Sample Output 2:
// 12 13 34 55 98

function returnUnique($array) {
    $arr = explode(" ", $array);
    $new = [];
    for($i = 0; $i < count($arr); $i++) {
        if(!in_array($arr[$i], $new)) {
           array_push($new, $arr[$i]);
        }
    }
    sort($new);
    $new = implode (" ", $new);
    return $new;
}
echo returnUnique(readline());
