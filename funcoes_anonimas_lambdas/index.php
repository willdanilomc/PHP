
<?php


$funcao = create_function('$valor1, $valor2', ' return "A soma de $valor1 e $valor2 = " . ($valor1 + $valor2); ');

echo $funcao(5,10);
?>