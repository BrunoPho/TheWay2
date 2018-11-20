<?php

require_once "../cruds/Crudcarreta.php";
require_once "../models/carreta.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    listar();
}

function listar(){    //todo trocar listar por perfil

    $carretas = new Crudcarreta();
    $listacarretas = $carretas->getcarretas();

    include __DIR__ . "/../views/carreta/carreta_listar.php";

}

function cadastro(){

    include __DIR__ . "/../views/carreta/carreta_cadastro.php";
}

function cadastrar(){
    //cod_carreta, ano_fabricacao, ano_modelo, cod_produto
    $carreta = new carreta();
    $carreta->cod_carreta          = filter_input(INPUT_POST, 'cod_carreta',          FILTER_SANITIZE_STRING);
    $carreta->ano_fabricacao         = filter_input(INPUT_POST, 'ano_fabricacao',         FILTER_SANITIZE_STRING);
    $carreta->ano_modelo      = filter_input(INPUT_POST, 'ano_modelo',      FILTER_SANITIZE_STRING);
    $carreta->cod_produto         = filter_input(INPUT_POST, 'cod_produto',         FILTER_SANITIZE_STRING);

    $crud_carreta = new Crudcarreta();
    $crud_carreta->salvar($carreta);

    listar();

}

function editar(){

    //deve passar o ID

    $carreta = new Crudcarreta();
    $carreta = $carreta->getcarreta($_GET['id_carreta']);

    include __DIR__ . "/../views/carreta/carreta_editar.php";

}

//Vai salvar e substituir o que foi o formulario (Atualizar)
function salvar_editar(){

    $carreta = new Crudcarreta();
    $carreta->editar($_POST['id_carreta'], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['senha'], $_POST['rg'], $_POST['cpf'], $_POST['num_cnh'], $_POST['cod_cidade']);

}

if (isset($_GET['acao']) and function_exists($_GET['acao'])) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}

function excluir(){


    $carreta = new Crudcarreta();
    $carreta->excluircarreta($_GET['id_carreta']);

    header('Location: ../../app/controllers/carreta.php?acao=listar.php');
}