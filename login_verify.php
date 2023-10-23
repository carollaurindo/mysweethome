<?php
session_start();
$email = $_POST['email'];
$senha =$_POST['senha'];

$emailDoBD = "supernikerson.patrick@hotmail.com";
$senhaDoBD = "123456789";
echo $email ."</br>" .$senha;


if($email == $emailDoBD){
    if($senha == $senhaDoBD){
        echo "Funcionou ir para a proxima pagina";
        $_SESSION["login"] = true;
        header('location:perfil.php');
    }else{
        header('location:login.php');
    }
}else{
    header("location:login.php");
}

?>