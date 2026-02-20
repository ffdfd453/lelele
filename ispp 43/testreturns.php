<?php
$foo = include 'return.php';
echo $foo; // выведет 'PHP'
$bar = include 'noreturn.php';
echo $bar; // выведет 1
?>