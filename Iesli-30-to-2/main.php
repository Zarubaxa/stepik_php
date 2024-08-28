<?php
// Написать функцию, которая будет фильтровать массив чисел и возвращать только те числа, которые делятся на 3 без остатка, а также умножать каждое число на 2. 
// Sample Input 1:
// 1 2 3 4 5 6 7 8 9

// Sample Output 1:
// 6 12 18

// Sample Input 2:
// 1 3 5

// Sample Output 2:
// 6

$check = function($data) {
    $str = '';
    $arr = explode(" ", $data);
    foreach($arr as $num) {
        if($num % 3 == 0) {
            $str .= $num * 2 . " ";
        }
    }
    return $str;
};
echo $check(readline());

// $result = fn($check) => strtoupper($string);

