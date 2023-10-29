<?php 

require_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro de guias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="verify/guias_verify.php" method="post">
            <input type="text"  name="titulo" placeholder="Titulo"><br>
            <select  name="categoria" >
                <?php
                        //logica das categorias
                    echo "<option value='1'> Unico </option>";
                ?>

            </select>
</br>
            <textarea name="conteudo" cols="30" rows="10"></textarea>
</br>
            <button type="submit">Enviar</button>

        </form>
    
    </body>
</html>