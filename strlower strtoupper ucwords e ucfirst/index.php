<?php

$nome1 = "Willian";
$nome2 = "willian danilo mendes costa";

// Todos os caracteres em maisculo
echo strtoupper($nome2) . "<br>";
// Todos caracteres em minusculo
echo strtolower($nome1) . "<br>";
// Primeiro caractere da frase em maiusculo
echo ucfirst($nome2) . "<br>";
// Primeiro caractere de cada nome em maisculo
echo ucwords($nome2) . "<br>";

if (ucfirst($nome1) == strtoupper($nome2)) {
    echo  " Nomes iguais";
} else{
    echo "<br> Nome: " . $nome1 . " é diferente de " .  $nome2;
}



?>