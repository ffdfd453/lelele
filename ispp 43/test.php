<?php
echo "До подключения: $color $fruit<br>"; 

include 'vars.php';

echo "После подключения: $color $fruit<br>"; 
if ((include 'vars.php') == true) {
    echo 'Модуль успешно подключён <br>';
}
else {
    echo 'lelele <br>';
}

?>
<?php
function foo()
{
    global $color;
    include 'vars.php';
    echo "Тест: $color $fruit <br>";
}

foo(); // A green apple
echo "Тест: $color $fruit";   // A green
?>


