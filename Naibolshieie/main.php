<?php
//     На вход подается 3 числа. Напишите функцию, которая находит наибольшее из этих чисел и возвращает его.

// Sample Input:
// 4
// 5
// 6
// Sample Output:
// 6


function biggest($a, $b, $c) {
    $arr = [$a, $b, $c];
    $max = $arr[0];
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }

    }
    return $max;
}
echo biggest(readline(), readline(), readline());