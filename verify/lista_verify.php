<?php
session_start();
require_once("../conexao.php");
$item = $_POST['item'];
$idUsuario = $_SESSION['id_usuario'];

$result = inserir($mysqli_con,"lista","item_lista,id_usuario","'$item','$idUsuario'");
echo $result;

if($result){
  echo "criado com sucesso";
}
  header("location:../lista.php?status=0");


?>
