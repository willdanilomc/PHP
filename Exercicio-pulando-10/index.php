<?php

for($i = 10; $i <= 1000; $i=$i+10){
    echo "Resultado é " . $i . "<br>";
}

$i = 10;
while ($i <= 1000){
    echo "Resultado é " . $i . "<br>";
    $i = $i + 10;
}


for ($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        echo " i = " . $i . " j = " . $j . "<br>";
        if($j == 5){
            break;
        }
    }
}



?>
