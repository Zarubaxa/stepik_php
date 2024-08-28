<?php
//     Напишите программу, которая запрашивает числа у пользователя, затем находит минимальное и максимальное значение в массиве и выводит их на экран.

// Sample Input:

// 1 7 3 2 5 6
// Sample Output:

// 1
// 7

$numbers = readline();
$arr = explode(" ", $numbers);
$min = $arr[0];
$max = $arr[0];
// echo $min;
$max = "";
for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] < $min) {
        $min = $arr[$i];
    }
    elseif($arr[$i] > $max) {
        $max = $arr[$i];
    }
}
echo $min . "\n" . $max;