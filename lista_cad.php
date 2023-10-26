<?php

$item = $_POST['item'];
$idUsuario = $_POST['usuario'];

$result = inserir($mysqli_con,"lista(item_lista,id_usuario","values($item,$idUsuario)");
if($result){
  echo "criado com sucesso";
}
  header("location:lista.php?status=0");


?>
