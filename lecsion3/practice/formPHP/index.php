<?php

// Подключение к БД (сервер, имя пользователя, пароль, название базы данных)
// $conn = new mysqli("localhost", "root", "", "studentsdb");
include "connection.php";

$result = $conn->query("SELECT * FROM students ORDER BY year");

$courses = [
   'Web-программирование',
   'DevOps',
   'UI/UX'
];

include "template.php";
