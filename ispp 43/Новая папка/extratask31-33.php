<?php 
function  calculateDiscount($price, $percent){
    $price;
    $percent;
    echo "Цена: $price, скидка: $percent<br>";
    $price = $price - $percent;
    echo "Цена со скидкой: $price <br>";
}

echo calculateDiscount(100, 15);

$arr = [
    ['name' => 'Анна', 'grades' => [4, 5, 4, 2]],
    ['name' => 'Борис', 'grades' => [5, 5, 5, 5]],
    ['name' => 'Виктор', 'grades' => [3, 3, 4, 4]],
    ['name' => 'Галина', 'grades' => [4, 5, 5, 5]]
];

function GPA($grades) {
    return array_sum($grades) / count($grades);
}

usort($arr, function($a, $b) {
    return $b['grades'] <=> $a['grades'];
});

echo "Список учеников по успеваемости:<br>";
foreach ($arr as $student) {
    echo $student['name'] . ": средний балл = " . GPA($student['grades']) . "<br>";
}

print("<br>"); 

$arr1 = [
    ['product' => 'Яблоки', 'price' => 10],
    ['product' => 'Апельсины', 'price' => 20],
    ['product' => 'Огурцы', 'price' => 220],
    ['product' => 'Яйцо дракона', 'price' => 50],
    ['product' => 'Обычное яйцо', 'price' => 250],
    ['product' => 'Принглс', 'price' => 500],
];

$mostExpensive = $arr1[0]; 
foreach ($arr1 as $product) { 
    if ($product['price'] > $mostExpensive['price']) { 
        $mostExpensive = $product; 
    } 
}

echo "Самый дорогой товар:
{$mostExpensive['product']},
{$mostExpensive['price']} руб.<br>";

function generatePassword($length) { 
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
$password = ''; 
$charsLength = strlen($chars) - 1; 
for ($i = 0; $i < $length; $i++) { 
    $password .= $chars[random_int(0, $charsLength)]; } 
    return $password; 
    } 

    print("<br>"); 

echo "Генерация паролей:<br>";
for ($i = 1; $i <= 1; $i++) { 
    $length = 8; echo "Пароль: ({$length} символов): " . generatePassword($length) . "<br>"; 
} 

print("<br>"); 

function formatFullName($lastName, $firstName, $middleName) { 
    return $lastName . ' ' . mb_substr($firstName, 0, 1) . '.' . mb_substr($middleName, 0, 1) . '.'; 
    }
echo "ФИО:<br>"; 
$lastName = "Иванов"; 
$firstName = "Глеб"; 
$middleName = "Иванович<br>"; 
echo "ФИО: $lastName $firstName $middleName";
$formatted = formatFullName($lastName, $firstName, $middleName);
echo "Результат: {$formatted}<br>";
?>