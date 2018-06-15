<?php

if(($login== "will") && ($senha = "123")){
    setcookie("usuario", $login, time() + 10);
    setcookie("pass", $senha, time() + 10);
    header("location: index.php");
}
else{
    echo "Sem acesso e permissao";
}


?>