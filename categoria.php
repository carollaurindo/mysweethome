<?php 
if($_GET['status'] == 1){
  echo "
  <script type="text/javascript" defer>
      alert("Categoria criada com sucesso");
    </script>
  ";
}else{

  echo "
  <script type="text/javascript" defer>
      alert("Categoria não criada com sucesso");
    </script>
  ";
}
?>

<html>
<head>
<title>Criar categorias</title>
</head>
<body>

<form action="categoria_cad.php" method="POST">
  <input type="text" length="20" name="categoria" placeholder="Digite o nome da categoria">
  <button type="submit">Cadastrar</button>
  
</form>
</body>
</html>
