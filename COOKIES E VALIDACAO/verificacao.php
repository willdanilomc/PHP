<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

if(($login == "will") && ($senha == "123")){
    echo "Sucesso";
    setcookie("usuario", $login, time() + 10);
    setcookie("pass", $senha, time() + 10);
}

else{
    echo "Sem acesso";
}

?>