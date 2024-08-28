<?php
// Sample Input:
// 1 7 3 1 5 6
// Sample Output:
// 121
$num = str_replace(" ", "", readline());
$sum = 0;
$numArr = str_split($num);
for($i = 0; $i < count($numArr); $i++) {
    $sum += pow($numArr[$i], 2);
}
echo $sum;