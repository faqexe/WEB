<!-- Добавление записей в БД -->
<?php

include "connection.php";

// Вытаскиваем значения из параметра запроса
$name = $_GET['name'] ?? '';
$second_name = $_GET['second_name'] ?? '';
$year = $_GET['year'] ?? 2000;
$course = $_GET['course'] ?? '';


$conn -> query("
INSERT INTO students (name, second_name, year, course)
VALUES ('$name', '$second_name', $year, '$course')
");

// Редирект - перенаправление на страницу
header("Location: /index.php");
exit;