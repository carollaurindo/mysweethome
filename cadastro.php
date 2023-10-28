<?php
if($_SESSION['login'] != true){
    header("location:login.php");

}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="verify/cadastro_verify.php" method="post">
        <input  name="nome" type="text" placeholder="Nome de usuario">
        <input name="email" type="email" placeholder="Email">
        <input name="senha" type="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form> 
    </body>
</html>