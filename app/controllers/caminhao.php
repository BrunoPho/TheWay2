<?php

require_once "../cruds/CrudCaminhao.php";

//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    echo "chamou index";
}

function listar(){

    $caminhoes = new Crudcaminhoneiro();
    $listaCaminhoes = $caminhoes->getCaminhoneiros();

    include __DIR__."/../views/caminhao/caminhao_listar.php";

}



//casos

if (isset($_GET['acao']) and function_exists($_GET['acao']) ) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}