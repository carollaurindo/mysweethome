<?php
require_once('../conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $imagem = $_FILES['imagem'];
    $pastaImagem = 'imagens/';
    $caminho = $pastaImagem . $imagem['name'];
    if(move_uploaded_file($imagem["tmp_name"],"../$pastaImagem".$imagem['name'])){
        $result = inserir($mysqli_con,"usuarios",
        "nome_usuario,caminho,senha_usuario,email_usuario",
        "'$nome','$caminho','$senha','$email'");
        header("location:login.php");
    }else{
        header("location:cadastro.php");
    }
?>