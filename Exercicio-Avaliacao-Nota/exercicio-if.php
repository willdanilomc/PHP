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