 <?php
 session_start();
 if(isset($_SESSION['login'])){
 if($_SESSION['login'] == true){
    header("location:perfil.php");

 }
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
    <form action="../verify/cadastro_verify.php" method="post" enctype="multipart/form-data">
        <input  name="nome" type="text" placeholder="Nome de usuario"></br>
        <input type="file" name="imagem" accept=".jpg,.jpeg,.png"> </br>
        <input name="email" type="email" placeholder="Email"></br>
        <input name="senha" type="password" placeholder="Senha"></br>
        <button type="submit">Enviar</button>
    </form> 
    </body>
</html>