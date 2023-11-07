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
    $imagem = $_FILES['imagem'];
    $pasta = "../imagens/";
    
    $caminho = $pastaImagem . $imagem['name'];
    if(move_uploaded_file($imagem["tmp_name"],"../$pasta".$imagem['name'])){
      $result=  inserir($mysqli_con,"guias","titulo_guia,id_categoria,id_colaborador,texto_guia,data_guia,hora_guia","
          '$titulo',
          '$categoria',
          '$id',
          '$conteudo',
          '$data',
          '$hora',
          '$caminho'
        ");
    }


   
    if($result){
        header("location:../privado/guias.php?status=1");
    }
    else {
      header("location:../privado/guias.php?status=0");
      
    }

?>