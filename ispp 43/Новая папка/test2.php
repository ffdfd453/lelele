<?php
echo "До подключения: $color $fruit<br>"; 

require 'vars.php';

echo "После подключения: $color $fruit<br>"; 
if ((require 'vars.php') == false) {
    echo 'Модуль успешно подключён <br>';
}
else {
    echo 'lelele';
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


