<!-- Поиск наименьшего числа с помощью функции -->
<?php

require "functions.php";

$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;

$a2 = $_GET['a2'] ?? 0;
$b2 = $_GET['b2'] ?? 0;

$c = mymin($a, $b);
$c2 = mymin($a2, $b2);
$c3 = mymin($c, $c2);
$c4 = mymin($a, $b, $a2, $b2);

include "template.php";
