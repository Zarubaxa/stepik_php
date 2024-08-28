<?php
$str = '';
for($i = 0; $i < 100; $i++) {
    if($i < 10) {
        $str .= '0'.$i.', ';
    } else {
        $str .= $i.', ';
    }

}
echo $str;