<?php

$a = $_GET['a'] ?? 1;
$b = $_GET['b'] ?? 1;

$sum = $a + $b;
$pro = $a * $b;
$chas = $a / $b;
$raz = $a - $b;

include "template.php";
