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


        <form action="calcula.php" method="post">
          <label for="">Nome do Cliente</label>
            <input type="text" name="nomeDoCliente">
            
           <label for="">Digite o Valor da compra</label>
            <input type="text" name="valorDaCompra">
            
            <label for="">Digite o Valor da compra</label>
            <input type="text" name="descontoPermissao">
            
            
            <button type="submit">Enviar</button>
        </form>
        
        
