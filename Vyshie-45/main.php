<?php
// Дан массив $students с данными о студентах: имя, возраст и средний балл за экзамены. Мы хотим вывести список студентов, чей средний балл выше 4.5.
// Sample Output:
// Иван, возраст 20, средний балл 4.8
// Петр, возраст 19, средний балл 5
// Анна, возраст 20, средний балл 4.6

$students = array(
    array("name" => "Иван", "age" => 20, "average_score" => 4.8),
    array("name" => "Мария", "age" => 21, "average_score" => 4.3),
    array("name" => "Петр", "age" => 19, "average_score" => 5.0),
    array("name" => "Анна", "age" => 20, "average_score" => 4.6),
    array("name" => "Сергей", "age" => 22, "average_score" => 4.2),
);

$str = "";
foreach($students as $key => $student) {
    if($student['average_score'] > 4.5) {
        $str .= $student['name'] . ", возраст " . $student['age'] . ", " . "средний балл " . $student['average_score'] . PHP_EOL;
    }
}
echo $str;