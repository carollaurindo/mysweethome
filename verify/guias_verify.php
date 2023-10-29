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
}else {
    header("location:../login.php");
}


require_once("../conexao.php");
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $conteudo = $_POST['conteudo'];
    $id = $_SESSION['id_usuario'];
    $data = date("j, n, Y");      
    $hora = date("H:i:s");

    
    // echo $titulo. "</br>";
    
    // echo $categoria. "</br>";
    
    // echo $id. "</br>";

    // echo $conteudo. "</br>";
    
    // echo $data. "</br>";
    
    // echo $hora. "</br>";

   $result=  inserir($mysqli_con,"guias","titulo_guia,id_categoria,id_colaborador,texto_guia,data_guia,hora_guia","
        '$titulo',
        '$categoria',
        '$id',
        '$conteudo',
        '$data',
        '$hora'
    ");

    if($result){
        header("location:../guias.php?status=1");
    }
    else {
      header("location:../guias.php?status=0");
      
    }

?>