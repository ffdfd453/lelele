<?php
function addition($a,$b){
    $x = $a +  $b;
    echo "Суммой $a + $b будет $x <br>";
};
function substraction ($a,$b){
    $x = $a - $b;
    echo "$a - $b = $x <br>";
}
function multiplication ($a,$b){
    $x = $a * $b;
    echo "$a * $b = $x <br>";
}
function division ($a,$b){
    $x = $a / $b;
    echo "$a / $b = $x <br>";
}
function exponentation($a,$b){
    if($b < 0){
        $i = pow($a, $b);
        $x = $i;
    }   else {
        $x = pow($a, $b);
    };
    echo "При возведении $a в степень $b вышло $x <br>";
}
function factorial($a,$b){
    if($a < 0 ){
        echo "Факториал не может быть меньше нуля <br>";
    } else {
        for($i = 0;$i < $a; $i++){
            $b = $a * $i;
        };
    };
    echo "Факториалом $a является $b <br>";
}

function help($func){
    if(!function_exists($func)){
        echo "Функция $func не сущствует <br>";
    }
    else{
        echo __FUNCTION__;
    }
    }
    class Library {
        static function info() {
            echo "- Информация: <br>";
            echo "- Название библиотеки: MathLibery <br>";
            echo "- Версия: idk <br>";
            echo "- Создатель: me <br>";
            echo "- Email: lelele@gmail.com <br>";
        }
    }
    
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['info'])) {
            Library::info();
        } else {
            echo "Неверный ввод <br>";
        }
    } else {
        echo "Ъ <br>";
    }
?>