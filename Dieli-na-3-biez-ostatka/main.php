<?php
//     На вход поступает массив с числами. Нужно вывести все числа, которые делятся на 3 без остатка и больше 10.
// Sample Input:
// 4 6 3 9 66 78 31 90
// Sample Output:
// 66 78 90

$enter = readline();
$arr = explode(" ", $enter);
$str = "";
foreach($arr as $elem) {
    if($elem % 3 === 0 && $elem > 10) {
        $str.= $elem . " ";
    }
}
echo $str;


