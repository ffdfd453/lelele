<?php
$str = "Строка 1 <br>";
$length = strlen($str);
echo $str;
echo "Длина строки: $length символов <br>";

$part = substr($str, 6, 15);
echo "Подстрока: $part <br>";
$trim = trim($str);
$low = mb_strtolower($trim);
echo "После удаления: $trim <br>";

echo "После приведения к нижнему регистру: $low <br>";
$pos = strpos($low, $sub);
if($pos !== false){
    echo "У подстроки $sub позиция $pos <br>";
}
else{
    echo "Подстрока не найдена <br>";
}
$cont = substr_count($low, $sub);
echo "Вхождений в подстроку $sub: $cont";
?>