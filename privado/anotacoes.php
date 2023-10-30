<?php 

if(isset($_GET['status'])){
  if($_GET['status'] == 1){
   
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Criando anotações</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
        <form action="verify/anotacoes_verify.php" method="post">
            <input type="text" placeholder="Titulo" name="titulo"></br>
            <textarea name="conteudo" cols="30" rows="10" placeholder="Coloque aqui sua experiencia"></textarea></br>
            <button type="submit" >Enviar</button>
        </form>


    </body>
</html>