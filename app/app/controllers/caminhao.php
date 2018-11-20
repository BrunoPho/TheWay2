<?php

require_once "../cruds/Crudcaminhao.php";
require_once "../models/caminhao.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    listar();
}

function listar(){    //todo trocar listar por perfil

    $caminhaos = new Crudcaminhao();
    $listacaminhaos = $caminhaos->getcaminhaos();

    include __DIR__ . "/../views/caminhao/caminhao_listar.php";

}

function cadastro(){

    include __DIR__ . "/../views/caminhao/caminhao_cadastro.php";
}

function cadastrar(){

    $caminhao = new caminhao();
    $caminhao->cod_caminhao     = filter_input(INPUT_POST, 'cod_caminhao',     FILTER_SANITIZE_STRING);
    $caminhao->ano_modelo       = filter_input(INPUT_POST, 'ano_modelo',       FILTER_SANITIZE_STRING);
    $caminhao->ano_fabricacao   = filter_input(INPUT_POST, 'ano_fabricacao',   FILTER_SANITIZE_STRING);
    $caminhao->capacidade       = filter_input(INPUT_POST, 'capacidade',       FILTER_SANITIZE_STRING);
    $caminhao->cod_modelo       = filter_input(INPUT_POST, 'cod_modelo',       FILTER_SANITIZE_STRING);
    $caminhao->cod_tipo         = filter_input(INPUT_POST, 'cod_tipo',         FILTER_SANITIZE_STRING);
    $caminhao->cod_caminhoneiro = filter_input(INPUT_POST, 'cod_caminhoneiro', FILTER_SANITIZE_STRING);

    $crud_caminhao = new Crudcaminhao();
    $crud_caminhao->salvar($caminhao);

    listar();

}

function editar(){

    //deve passar o ID

    $caminhao = new Crudcaminhao();
    $caminhao = $caminhao->getcaminhao($_GET['id_caminhao']);

    include __DIR__ . "/../views/caminhao/caminhao_editar.php";

}

//Vai salvar e substituir o que foi o formulario (Atualizar)
function salvar_editar(){

    $caminhao = new Crudcaminhao(); //cod_caminhao, ano_modelo, ano_fabricacao, capacidade, cod_modelo, cod_tipo, cod_caminhoneiro
    $caminhao->editar($_POST['cod_caminhao'], $_POST['ano_modelo'], $_POST['ano_fabricacao'], $_POST['capacidade'], $_POST['cod_modelo'], $_POST['cod_tipo'], $_POST['cod_caminhoneiro']);

}

if (isset($_GET['acao']) and function_exists($_GET['acao'])) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}

function excluir(){


    $caminhao = new Crudcaminhao();
    $caminhao->excluircaminhao($_GET['id_caminhao']);

    header('Location: ../../app/controllers/caminhao.php?acao=listar.php');
}