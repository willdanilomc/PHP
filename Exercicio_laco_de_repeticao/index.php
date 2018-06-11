<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <!-- Required meta tags -->
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>


    <?php

  // Nível (Caminho) - '' para a raiz ou index, '../' para subir um nivel, '../../' para subir dois niveis, e assim por diante.
  define('U', '');

  // ID da pagina no menu
  define('MENU', 0);
  ?>

        <?php 
    
           //SINTAXE: 
          //FOR(INICIALIZACAO DAS VARIAVEIS;CONDICAO;INCREMENTACAO OU DECREMENTACAO){}
        
            
            //FOR
            for ($i=1; $i <= 5; $i++){
                 echo "<br> Numero " . $i . "<br>";
            }
    
            // Laço de repetição 
            // WHILE = SINTAXE: while(condicao) { executar}  
            
            // LAÇO WHITE
            $i = 1;
            while($i <= 5){
                echo "Meu numero é  " . $i . "<br>";
                $i++;
            }
            // LAÇO DOWHITE
            $i = 1;
            do {
                 echo "Meu numero é  " . $i . "<br>";
                $i++;
            }
            while($i <= 5)
   

        ?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <!-- Required meta tags -->
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>


    <?php

  // Nível (Caminho) - '' para a raiz ou index, '../' para subir um nivel, '../../' para subir dois niveis, e assim por diante.
  define('U', '');

  // ID da pagina no menu
  define('MENU', 0);
  ?>
        <?php
           // SINTAXE:
           //FOR(INICIALIZACAO DAS VARIAVEIS;CONDICAO;INCREMENTACAO OU DECREMENTACAO){}
            //FOR
            for ($i=1; $i <= 5; $i++){
                 echo "<br> Numero " . $i . "<br>";
            }
            // Laço de repetição 
            // WHILE = SINTAXE: while(condicao) { executar}
            // LAÇO WHITE
            $i = 1;
            while($i <= 5){
                echo "Meu numero é  " . $i . "<br>";
                $i++;
            }
            // LAÇO DOWHITE
            $i = 1;
            do {
                 echo "Meu numero é  " . $i . "<br>";
                $i++;
            }
            while($i <= 5)

        ?>
