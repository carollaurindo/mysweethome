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
require_once('../conexao.php');
    $usuario = $_SESSION['id_usuario'];

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $result = inserir($mysqli_con,"anotacoes","titulo_anotacao,id_usuario,texto_anotacao","'$titulo','$usuario','$conteudo'");

    if($result == true){
        $status=1;
      }
        header("location:../anotacoes.php?status=1");
      
      
?>