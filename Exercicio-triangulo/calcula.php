<?php

$ladoE = $_POST["ladoE"];
$ladoD = $_POST["ladoD"];
$ladoI = $_POST["ladoI"];

if (($ladoI < ($ladoE + $ladoD)) && ($ladoE < ($ladoD - $ladoI)) && ($ladoD <($ladoI + $ladoE))){
    
    if (($ladoE == $ladoD ) && ($ladoE == $ladoI)){
        echo "Triangulo Equilatero";
    } 
    
    elseif (($ladoI == $ladoD) || ($ladoI == $ladoE) || ($lade == $ladoD)){
        echo "Triangulo Isoceles";
    } 
    
    elseif (( $ladoD <> $ladoE ) && ($ladoD <> $ladoI) && ($ladoI <> $ladoE)){
        echo "Triangulo Escaleno";
    }
    
    
 } 




?>
