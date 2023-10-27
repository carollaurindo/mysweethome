<?PHP
  require_once("conexao.php");
$categoria = $_POST['categoria'];
$status = 0;

  $result = inserir($mysqli_con,"categorias","VALUES($categoria");
  
  if($result == true){
    echo "sucesso";
    $status=1;
  }
    header("location:categoria.php?status=1");
  
  

?>
