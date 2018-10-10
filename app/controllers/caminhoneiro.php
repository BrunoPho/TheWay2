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

function listar(){

    $caminhoneiros = new Crudcaminhoneiro();
    $listaCaminhoneiros = $caminhoneiros->getCaminhoneiros();

    include __DIR__."/../views/caminhoneiro/caminhoneiro_listar.php";

}

function cadastro(){
    include __DIR__."/../views/caminhoneiro/caminhoneiro_cadastro.php";
}

function cadastrar(){

    //Array ( [nome] => medicina [email] => felipepassig@hotmail.com [telefone] => 4799999886 [senha] => 123 [rg] => 123 [cpf] => 123 [cidade] => 123 [num_antt] => 123 [num_cnh] => 123 [categoria_cnh] => a )

    $caminhoneiro = new Caminhoneiro();
    $caminhoneiro->nome       = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $caminhoneiro->email      = $_POST['email'];
    $caminhoneiro->telefone   = $_POST['telefone'];
    $caminhoneiro->senha      = $_POST['senha'];
    $caminhoneiro->rg         = $_POST['rg'];
    $caminhoneiro->cpf        = $_POST['cpf'];
    $caminhoneiro->cod_cidade = $_POST['cidade'];
    $caminhoneiro->num_antt   = $_POST['num_antt'];
    $caminhoneiro->num_cnh    = $_POST['num_cnh'];
    $caminhoneiro->categoria_cnh = $_POST['categoria_cnh'];

    $crud_caminhoneiro = new Crudcaminhoneiro();
    $crud_caminhoneiro->salvar($caminhoneiro);

    listar();

}

function editar(){
    //devera mostrar o formulario de editar

    //deve passar o ID

    $caminhoneiro = new Crudcaminhoneiro();
    $caminhoneiro = $caminhoneiro->getCaminhoneiro(2);


    include __DIR__."/../views/caminhoneiro/caminhoneiro_editar.php";

}

function salvar_editar(){

}



//casos

if (isset($_GET['acao']) and function_exists($_GET['acao']) ) {
    call_user_func($_GET['acao']);

} else {

    index();
    //header('Location: ../../index.php');

}