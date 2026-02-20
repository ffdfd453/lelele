<?php
$arr = ["Строка 1", "Строка 2", "Строка 3", "Строка 4", "Строка 5"];
$key = array_search("Строка 1", $arr);
$key1 = array_search("Строка 2", $arr);
$key2 = array_search("Строка 3", $arr);
$key3 = array_search("Строка 4", $arr);
$key4 = array_search("Строка 5", $arr);
for($i = 0; $i < 1; $i++){
    echo "$arr[0], индекс: $key <br>";
    echo "$arr[1], индекс: $key1 <br>";
    echo "$arr[2], индекс: $key2 <br>";
    echo "$arr[3], индекс: $key3 <br>";
    echo "$arr[4], индекс: $key4 <br>";    
}

print("<br>");

print_r($arr);

print("<br>");

$arr1 = array(
    "admin" => "lelele",
    "user1" => "lelele",
    "user2" => "lelele",
    "user3" => "lelele"
);

echo "Список пользователей:<br>";
print_r($arr1);

print("<br>");

$lelele = array_search("user3", $arr1, "lelele" );
if(array_key_exists($lelele) == true){
echo "Пользователь с логином user3 и паролем lelele существует, $lelele";
}
else{
    echo "Пользователя с логином user3 и паролем lelele не существует";
}
?>