<?php
    $students = array(
        1 => 'Алексей',
        2 => 'Борис',
        3 => 'Анна',
        4 => 'Дмитрий',
        5 => 'Александра'
    );
foreach($students as $key => $val) {
    if(mb_substr($stun, 0, 1) == "А") {
        echo $key . " ";
    }
}

foreach ($students as $key => $val) {
    if (substr($val, 0, 2) == "А") {
        echo "$key". " ";
    }
}