<?php
//     На вход подается число, необходимо с помощью функции найти и вернуть массив делителей этого числа.
// Sample Input 1:
// 9
// Sample Output 1:
// 1 3 9
// Sample Input 2:
// 15
// Sample Output 2:
// 1 3 5 15

$divFun = function($num) {
    $str = '';
    for($i = 1; $i <= $num; $i++) {
        if($num % $i == 0) {
            $str .= $i . " ";
        }
    }
    return $str;
};

echo $divFun(readline());