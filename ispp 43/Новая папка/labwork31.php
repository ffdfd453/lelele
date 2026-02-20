<?php
include 'MathLibery.php';

$a = 5;
$b = 3;
echo "a = $a <br>";
echo "b = $b <br>";

addition($a, $b);
substraction($a, $b);
multiplication($a, $b);
division($a, $b);
exponentation($a, $b);
factorial($a, $b);

$func = "addition";
$libr = "MathLibery";

help($func);
print("<br>");
Library::info();
?>