<?php

//Conta quantos caracteres tem uma string
$nome = "Willian Danilo Mendes Costa";
echo ' A variavel $nome que contem o conteudo ' . $nome . ' possui ' . strlen($nome) . ' caracteres ' . "<br>"; 


//Separa por espaços explode("", $variavel), depois monta uma array que deve se usar foreach.
$texto = "Willian Danilo Mendes Costa";
$explodirNome = explode(" ", $texto, 1);
    foreach($explodirNome as $separados);
    echo "Separados por " . $separados . "<br>";


$semEspaco =  trim($nome);
//rtrim() Elimita os espaço da direita
//ltrim() Elimina os espaços da esquerda
//trim() Elimina todos os espacos ambos

echo ' A variavel $semEspaco que contem o conteudo ' . $semEspaco . ' possui ' . strlen($nome) . ' caracteres '; 

//Posição na ordem alfabetica começando pelo 97 e vai até o 122
$caracteres = 97;
while($caracteres <= 122 ){
    echo $caracteres . "-" .  chr($caracteres) . "<br>" ;
    $caracteres++;
}


?>
