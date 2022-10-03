<?php

$a = $_GET['a'] ?? 1;
$b = $_GET['b'] ?? 1;

$sum = $a + $b;
$pro = $a * $b;

if ($b == 0) {
   $chas = 'Делить на 0 нельзя';
} else {
   $chas = $a / $b;
}
$raz = $a - $b;

include "template.php";
