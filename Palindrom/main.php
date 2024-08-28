<?php
//     Напишите функцию PHP, которая проверяет, является ли переданная строка палиндромом.
//     Если она является палиндромом, вывести "Да", если не является "Нет"
// Палиндром — число, буквосочетание, слово или текст, одинаково читающееся в обоих направлениях. Например, число 101; слово «топот».
// Sample Input 1:
// 101
// Sample Output 1:
// Да
// Sample Input 2:
// привет
// Sample Output 2:
// Нет
// Sample Input 3:
// menem
// Sample Output 3:
// Да
// $word = 'топез';
// $str1 = mb_substr($word, 0, round(mb_strlen($word) / 2), 'UTF-8'); 
// $str2 = mb_substr($word, -round(mb_strlen($word) / 2), round(mb_strlen($word) / 2), 'UTF-8'); 
// echo $str2;

// $str1 = substr($word, 0, round(mb_strlen($word) / 2)); 
// $str2 = mb_substr($word, -round(mb_strlen($word) / 2), round(mb_strlen($word) / 2)); 
$isPal = function($text) {
    if(strrev($text) == $text) {
        return 'Да';
    } else {
        return 'Нет';
    }
};
    echo $isPal('topot');