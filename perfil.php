<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        Pagina do perfil 

        <?php 
        echo $_SESSION['login'];
        echo $_SESSION['nome_usuario'];
        echo $_SESSION['id_usuario'];
        ?>
    </body>
</html>