<?php

require_once "../cruds/CrudServico.php";
require_once "../models/Servico.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    listar();
}

function listar(){    //todo trocar listar por perfil

    $servicos = new Crudservico();
    $listaservicos = $servicos->getservicos();

    include __DIR__ . "/../views/Servico/servico_listar.php";

}

function cadastro(){

    include __DIR__ . "/../views/Servico/servico_cadastra.php";
}


function cadastrar(){

    $servico = new servico();
    $servico->numero_seguro      = filter_input(INPUT_POST, 'numero_seguro',      FILTER_SANITIZE_STRING);
    $servico->data_entrega       = filter_input(INPUT_POST, 'data_entrega',       FILTER_SANITIZE_STRING);
    $servico->cod_servico        = filter_input(INPUT_POST, 'cod_servico',        FILTER_SANITIZE_STRING);
    $servico->data_cadastro      = filter_input(INPUT_POST, 'data_cadastro',      FILTER_SANITIZE_STRING);
    $servico->quantidade         = filter_input(INPUT_POST, 'quantidade',         FILTER_SANITIZE_STRING);
    $servico->data_retirada      = filter_input(INPUT_POST, 'data_retirada',      FILTER_SANITIZE_STRING);
    $servico->data_retirada_prev = filter_input(INPUT_POST, 'data_retirada_prev', FILTER_SANITIZE_STRING);
    $servico->data_entrega_prev  = filter_input(INPUT_POST, 'data_entrega_prev',  FILTER_SANITIZE_STRING);
    $servico->cod_status         = filter_input(INPUT_POST, 'cod_status',         FILTER_SANITIZE_STRING);
    $servico->cod_cidade         = filter_input(INPUT_POST, 'cod_cidade',         FILTER_SANITIZE_STRING);
    $servico->cod_produto        = filter_input(INPUT_POST, 'cod_produto',        FILTER_SANITIZE_STRING);

    $crud_servico = new Crudservico();
    $crud_servico->salvar($servico);

    listar();

}

function editar(){

    //deve passar o ID

    $servico = new Crudservico();
    $servico = $servico->getservico($_GET['id_servico']);

    include __DIR__ . "/../views/Servico/servico_editar.php";

}

//Vai salvar e substituir o que foi o formulario (Atualizar)
function salvar_editar(){

    $servico = new Crudservico();
    $servico->editar($_POST['numero_seguro'], $_POST['data_entrega'], $_POST['cod_servico'], $_POST['data_cadastro'], $_POST['quantidade'], $_POST['data_retirada'], $_POST['data_retirada_prev'], $_POST['data_entrega_prev'], $_POST['cod_status'], $_POST['cod_cidade'], $_POST['cod_produto']); // Discutir oq sera editado
//   numero_seguro, data_entrega, cod_servico, data_cadastro, quantidade, data_retirada, data_retirada_prev, data_entrega_prev, cod_status, cod_cidade, cod_produto
}

if (isset($_GET['acao']) and function_exists($_GET['acao'])) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}

function excluir(){


    $servico = new Crudservico();
    $servico->excluirservico($_GET['id_servico']);

    header('Location: ../../app/controllers/servico.php?acao=listar.php');
}

