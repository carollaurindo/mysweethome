
<?php

$banco = "testetcc";
$usuario = "root";
$senha = "";
$localhost = "localhost";


$mysqli_con = mysqli_connect($localhost,$usuario,$senha,$banco);


function recebe($mysqli,$sql){

    $result = mysqli_query($mysqli,$sql);
    if($result){
            return $result;
    }
    else{
        return 0;
    }

}
function inserir($mysqli,$tabela,$valoresTabela,$info){

    $sql = "INSERT INTO " . $tabela ."(".$valoresTabela.")" . "VALUES(" . $info .")";

    $result = mysqli_query($mysqli,$sql);
    if($result){
        return 1;
    }else{
        return 0;
    }
}



?>