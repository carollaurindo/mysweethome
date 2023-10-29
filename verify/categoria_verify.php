<?PHP

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

  require_once("conexao.php");
$categoria = $_POST['categoria'];
$status = 0;

  $result = inserir($mysqli_con,"categorias","nome_categoria","'$categoria'");
  
  if($result == true){
    echo "sucesso";
    $status=1;
  }
    header("location:categoria.php?status=1");
  
  

?>
