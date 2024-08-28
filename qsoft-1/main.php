<?php
$data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];

$str1 = $data['question'][0];
$str2 = $data['animals']['birds'][0]['name'];
$str3 = ' не ';
$str4 = $data['animals']['others'][0][0]['name'];
$str5 = ' и ' . $data['question'][2] . " им " . $data['question'][3] . " ";
$str6 = $data['parts']['feathers'];
echo $str1 . " " . $str2 . $str3 . $str4 . $str5 . $str6;