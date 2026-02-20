<?php 
echo "<table border='1' cellpading='5'>";
for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($j = 1; $j <= 10; $j++){
        $res = $i * $j;

        echo "<td>$res</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
?>