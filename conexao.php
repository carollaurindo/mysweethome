<?php

$banco = "";
$usuario = "";
$senha = "";
$localhost = "";


$mysqli_con = mysqli_connect($localhost,$usuario,$senha,$banco);


function recebeInformacoesUsuario($mysqli,$user,$passwordUser){
        $arrayInfo = [];
    // logica do recebimento 
    $sql = "SELECT $user,$passwordUser FROM usuarios";
    if($result = mysqli_query($mysqli,$sql)){
       $arrayInfo =  mysqli_fetch_array($result) ;
    }
    //passando informações para um array
    return $arrayInfo;
}


?>