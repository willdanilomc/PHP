<?php 

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];

if (($valor1 >= $valor2) && ($valor1 >= $valor3)) {
    echo "O valor1 é maior <br>";
} 

elseif (($valor2 >= $valor1) && ($valor2 >= $valor3)){
    echo "O valor 2 é maior <br>";
} 

else {
    echo "O maior é valor 3 <br>";
} 

if (($valor1 <= $valor2) && ($valor1 <= $valor3)){
    echo "O menor é valor1 <br>";
} elseif (($valor2 <= $valor1) && ($valor2 <= $valor3)){
    echo "O menor valor2 <br>";
} else{
    echo "O menor é valor3 <br>";
}

?>
