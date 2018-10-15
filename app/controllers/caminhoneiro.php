<?php

require_once "../cruds/CrudCaminhoneiro.php";
require_once "../models/Caminhoneiro.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    listar();
}

function listar(){ //trocar todo listar por perfil

    $caminhoneiros = new Crudcaminhoneiro();
    $listaCaminhoneiros = $caminhoneiros->getCaminhoneiros();

    include __DIR__."/../views/caminhoneiro/caminhoneiro_listar.php";

}

function cadastro(){

    include __DIR__."/../views/caminhoneiro/caminhoneiro_cadastro.php";
}

function cadastrar(){

    $caminhoneiro = new Caminhoneiro();
    $caminhoneiro->nome          = filter_input(INPUT_POST, 'nome',          FILTER_SANITIZE_STRING);
    $caminhoneiro->email         = filter_input(INPUT_POST, 'email',         FILTER_SANITIZE_STRING);
    $caminhoneiro->telefone      = filter_input(INPUT_POST, 'telefone',      FILTER_SANITIZE_STRING);
    $caminhoneiro->senha         = filter_input(INPUT_POST, 'senha',         FILTER_SANITIZE_STRING);
    $caminhoneiro->rg            = filter_input(INPUT_POST, 'rg',            FILTER_SANITIZE_STRING);
    $caminhoneiro->cpf           = filter_input(INPUT_POST, 'cpf',           FILTER_SANITIZE_STRING);
    $caminhoneiro->cod_cidade    = filter_input(INPUT_POST, 'cidade',        FILTER_SANITIZE_STRING);
    $caminhoneiro->num_antt      = filter_input(INPUT_POST, 'num_antt',      FILTER_SANITIZE_STRING);
    $caminhoneiro->num_cnh       = filter_input(INPUT_POST, 'num_cnh',       FILTER_SANITIZE_STRING);
    $caminhoneiro->categoria_cnh = filter_input(INPUT_POST, 'categoria_cnh', FILTER_SANITIZE_STRING);

    $crud_caminhoneiro = new Crudcaminhoneiro();
    $crud_caminhoneiro->salvar($caminhoneiro);

    listar();

}

function editar(){

    //deve passar o ID

    $caminhoneiro = new Crudcaminhoneiro();
    $caminhoneiro = $caminhoneiro->getCaminhoneiro($cod_caminhonerio = cod_caminhonerio);

    include __DIR__."/../views/caminhoneiro/caminhoneiro_editar.php";

}

 //Vai salvar e substituir o que foi o formulario (Atualizar)
function salvar_editar(){

}

if (isset($_GET['acao']) and function_exists($_GET['acao'])) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}

function excluir(){


    include __DIR__."/../views/caminhoneiro/caminhoneiro_listar.php";

    header('Location: ../../index.php');

}