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
