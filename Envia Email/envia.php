<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$conteudo = $_POST['mensagem'];
$destinho = "willian@qubedesign.com.br";

if (mail($destino,$email,$conteudo,"To: $email <$nome> <br>" . "From: Willian <$destinho>")){
    echo "Email enviado com sucesso";
} else{
    echo "Email não enviado";
}




?>