<?php

require_once "../cruds/CrudTransportadora.php";

//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    echo "chamou index";
}

function listar(){

    $transportadoras = new CrudTransportadora();
    $listaTransportadoras = $transportadoras->getTransportadoras();

    include __DIR__."/../views/transportadora/transportadora_listar.php";

}



//casos

if (isset($_GET['acao']) and function_exists($_GET['acao']) ) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}