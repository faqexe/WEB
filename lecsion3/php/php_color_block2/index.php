<?php

session_start();

$color = $_GET['color'] ?? "";
$type = $_GET['type'] ?? "";

$bgColor = $_SESSION['bgColor'] ?? "";
$fontColor = $_SESSION['fontColor'] ?? "";

if ($type == 'Цвет фона') {
   $bgColor = $color;
   $_SESSION['bgColor'] = $bgColor;
}
if ($type == 'Цвет шрифта') {
   $fontColor = $color;
   $_SESSION['fontColor'] = $fontColor;
}

include "template.php";