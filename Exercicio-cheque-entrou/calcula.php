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
