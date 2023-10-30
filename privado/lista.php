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
}else{
  header("location:login.php");
}
?>

<html>
<head>
<title>Criando item da lista</title>
</head>
<form action="../verify/lista_verify.php" method="post">
<input type="hidden" name="usuario" value="<?php  $_SESSION['id_usuario']?>">
<input type="text" name="item" placeholder="Nome do Item">
<button type="submit" > Enviar Item</button>
</form>

</html>
