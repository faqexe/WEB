<?php

session_start();

$color = $_GET['color'] ?? "";
$type = $_GET['type'] ?? "";
$block = $_GET['block'] ?? "";

$bgColor = $_SESSION['bgColor'] ?? "";
$fontColor = $_SESSION['fontColor'] ?? "";

$bgColor1 = $_SESSION['bgColor1'] ?? "";
$fontColor1 = $_SESSION['fontColor1'] ?? "";

$bgColor2 = $_SESSION['bgColor2'] ?? "";
$fontColor2 = $_SESSION['fontColor2'] ?? "";

if ($type == 'Цвет фона' and $block == 'block1') {
   $bgColor = $color;
   $_SESSION['bgColor'] = $bgColor;
}
if ($type == 'Цвет шрифта' and $block == 'block1') {
   $fontColor = $color;
   $_SESSION['fontColor'] = $fontColor;
}
if ($type == 'Цвет фона' and $block == 'block2') {
   $bgColor1 = $color;
   $_SESSION['bgColor1'] = $bgColor1;
}
if ($type == 'Цвет шрифта' and $block == 'block2') {
   $fontColor1 = $color;
   $_SESSION['fontColor1'] = $fontColor1;
}
if ($type == 'Цвет фона' and $block == 'block3') {
   $bgColor2 = $color;
   $_SESSION['bgColor2'] = $bgColor2;
}
if ($type == 'Цвет шрифта' and $block == 'block3') {
   $fontColor2 = $color;
   $_SESSION['fontColor2'] = $fontColor2;
}

include "template.php";
