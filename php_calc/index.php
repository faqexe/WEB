<?php

$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;

$sum = $a + $b;
$pro = $a * $b;
$chas = $a / $b;
$raz = $a - $b;

include "template.php";
