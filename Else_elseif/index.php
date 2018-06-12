<?php
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $Nota1 = $nota1 * 2 / 10;
        $Nota2 = $nota2 * 3 / 10;
        $Nota3 = $nota3 * 5 / 10;
        $resultadoMedia = ($Nota1 + $Nota2 + $Nota3);
        
        if ( $resultadoMedia >= 6){
            echo "Aprovado com média de " . $resultadoMedia;
        } 

        elseif ( $resultadoMedia >= 4 ){
             echo "Recuperacao com média de " . $resultadoMedia;
        } 

        else{
            echo "Aluno reprovado com média de " . $resultadoMedia;
        }

    ?>


    <?php 

        $valorCheque = $_POST["valorCheque"];

        //meu saldo
        $saldoEmConta = 500.00;

        if($valorCheque <= $saldoEmConta){
            $descontaCheque = ($saldoEmConta - $valorCheque);
            echo  "Valor descontado do cheque " . $valorCheque;
        } 

        else{
            echo "Sem saldo em conta <br>";
            echo "Total de saldo em conta R$ " . $saldoEmConta;
        } 

?>


<?php

$nome = $_POST["nomeDoCliente"];
$valor = $_POST["valorDaCompra"];
$descontoPermissao = $_POST["descontoPermissao"];

//Ver se o desconto é menor ou igual a 30%
if ($descontoPermissao <= 30){

        //Desconto de 10%
        if($valor <= 200){
            $desconto = 10;
            echo "Desconto de 10%" . "<br>";
        } 

        //Desconto de 15%
        elseif($valor <= 500) {
            $desconto = 15;
            echo "Desconto de 15%" . "<br>";
        } 

        //Desconto de 20%
        else{
            $desconto = 20;
            echo "Desconto de 20%" . "<br>";
        }

        $valorDesconto = ($valor * $desconto) / 100;
        $total = ($valor - $valorDesconto);

        echo "Nome do Cliente: " . $nome . "<br>";
        echo "Valor da Compra: " . $valor . "<br>";
        echo "Valor do Desconto: " . $valorDesconto . "<br>";
        echo "Valor Total: " . $total;
} 

else {
    echo "Desconto não permitido";
}

?>


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
