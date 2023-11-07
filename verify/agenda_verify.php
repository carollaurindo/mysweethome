<?php
 session_start();
 if(isset($_SESSION['login'])){
 if(isset($_GET['status'])){
   if($_GET['status'] == 1){
     
   }
 }
 }else{
    header("location:../login.php");
 }
require_once('../conexao.php');
   
$titulo = $_POST['titulo'];
$id = $_SESSION['id_usuario'];
$data = $_POST['data'];
$hora = $_POST['hora'];


echo $titulo . "</br>";
echo $id. "</br>";
echo $data. "</br>";
echo $hora. "</br>";


$result = inserir($mysqli_con,"agenda","titulo_agenda,id_usuario,data_agenda,hora_agenda","
'$titulo',
'$id',
'$data',
'$hora'
");

if($result){
    header("location:../privado/genda.php?status=1");
}else{
    header("location:../privado/agenda.php?status=0");
}

?>