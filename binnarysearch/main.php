<?php
$arr = [3, 5, 8, 22, 33, 99, 121, 144, 189, 465];
function binary($list, $item) {
    $low = 0;
    $high = count($list) - 1;

    while($low <= $high) {
        $mid = floor(($low + $high) / 2);
        $guess = $list[$mid];
        if($guess == $item) {
            echo $mid;
        }
        if($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
}

    binary($arr, 22);