<?php
// Поиск наименьшего числа с помощью функции
function mymin($p1, $p2)
{
   $z = 0;
   if ($p1 < $p2) {
      $z = $p1;
   } elseif ($p2 < $p1) {
      $z = $p2;
   } else {
      $z = "числа равны";
   }
   return $z;
}

// Возведение в степень и расчет
function sup($x, $y)
{
   $z = pow($x, $y);
   return "<span>$x<sup style='color: red'>$y</sup></span>=$z";
}
