<!-- Удаление записей из БД -->
<?php

include "connection.php";

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM students WHERE id=$id");

echo $id;

header("Location: /index.php");
exit;
