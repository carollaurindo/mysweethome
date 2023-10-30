<?php 
require_once("../conexao.php");
if(isset($_GET['status'])){
  if($_GET['status'] == 1){
   
  }
}
?>

<html>
<head>
<title>Criar categorias</title>
</head>
<body>

<form action="../verify/categoria_verify.php" method="POST">
  <input type="text" length="20" name="categoria" placeholder="Digite o nome da categoria">
  <button type="submit">Cadastrar</button>
  
</form>

<div class="Mostrar">
  <?php
  recebe($mysqli_con,"SELECT * FROM categorias");
  ?>

</div>
</body>
</html>
