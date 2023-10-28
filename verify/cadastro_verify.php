<?php
require_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    inserir($mysqli_con,"usuarios(nome_usuario,senha_usuario,email_usuario","$nome,$senha,$email");

?>