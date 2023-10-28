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
function inserir($mysqli,$tabelaEColunas,$info){

    $sql = "INSERT INTO " . $tabelaEColunas . "VALUES(" . $info .")";

    mysqli_query($mysqli,$sql);
}



?>