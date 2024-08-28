<?php
$check = readline();
$black = "https://www.example.com, Trojan.exe, backdoor.dll, keylogger.py";
if(strpos($black, $check) !== false) {
    echo "Данный ресурс заблокирован в целях вашей безопасности.";
} else {
    echo "Загрузка ресурса...";
}