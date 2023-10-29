<?php

session_start();
if(isset($_SESSION['login'])){
if(isset($_GET['status'])){
  if($_GET['status'] == 1){
    echo "
    <script type='text/javascript' defer>
        alert('Categoria criada com sucesso');
      </script>
    ";
  }
}
}

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
