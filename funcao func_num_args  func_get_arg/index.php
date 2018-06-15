<?php

function fazer ($nome, $sobrenome)
{
    // Pega a posição

    // RETORNANDO COM FOR
    // for ($i = 0; $i <= func_get_args(); $i++){
    //     echo "A funcao fazer() recebeu " . $i . " = " . func_get_arg($i) . "<br>";
    // }

    // RETORNANDO COM FOREACH
    foreach(func_get_args() as $chave => $conteudo);
    echo "A funcao fazer() recebeu " . $chave . " = " . $conteudo . "<br>";

}

fazer("Willian","Danilo");

?>