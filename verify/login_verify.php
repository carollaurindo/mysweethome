<?php
require_once("../conexao.php");
session_start();
$email = $_POST['email'];
$senha =$_POST['senha'];

$email_db;
$senha_db;
$id_usuario;
$nome_usuario;
$sql = recebe($mysqli_con,"SELECT * FROM usuarios WHERE email_usuario='$email' and senha_usuario='$senha'");
if ($sql)
{
    $result = mysqli_fetch_array($sql);
    $email_db = $result['email_usuario'];
    $senha_db = $result['senha_usuario'];
    $id_usuario = $result['id_usuario'];
    $nome_usuario =$result['nome_usuario'];
}



if($email == $email_db){
    if($senha == $senha_db){
         $_SESSION["login"] = true;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["nome_usuario"] = $nome_usuario;

        header('location:../privado/perfil.php');
    }else{
        header('location:../login.php');
    }
}else{
    header("location:../privado/login.php");
}


?>