<?php
$nome  = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$total = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($total >= 7){
    echo " Nome do Aluno " . $nome .  "<br>" . " Total da média é " . $total . " E foi Aprovado ";
} else{
    echo "Aluno" . $nome . "Não Aprovado";
}

?>
