<?php

$banco = "testetcc";
$usuario = "root";
$senha = "";
$localhost = "localhost";


$mysqli_con = mysqli_connect($localhost,$usuario,$senha,$banco);


function recebe($mysqli,$sql){

    $result = mysqli_query($mysqli,$sql);
    if($result ){
            $array = mysqli_fetch_array($result);
            return $array;
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
    return $sql;
}



?>