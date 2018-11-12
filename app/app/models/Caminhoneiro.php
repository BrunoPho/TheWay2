<?php

require_once __DIR__."/../conexao/Conexao.php";

class Caminhoneiro {

    public $cod_usuario; //chave primaria no BD
    public $nome;
    public $email;
    public $telefone;
    public $login;
    public $senha;
    public $rg;
    public $cpf;
    public $cod_cidade;
    public $num_antt;
    public $num_cnh;
    public $categoria_cnh;

    public function __construct(){

    }

    //TODO APAGAR APOS TESTE
//    public function __construct($nome, $email, $telefone, $senha, $rg, $cpf, $cidade, $num_antt, $num_cnh, $categoria_cnh, $cod_usuario = null){ //colocar estado e cod_tipo_usuario
//
//        $this->nome          = $nome;
//        $this->email         = $email;
//        $this->telefone      = $telefone;
//        $this->senha         = $senha;
//        $this->rg            = $rg;
//        $this->cpf           = $cpf;
//        $this->cidade        = $cidade;
//        $this->num_antt      = $num_antt;
//        $this->num_cnh       = $num_cnh;
//        $this->categoria_cnh = $categoria_cnh;
//        $this->cod_usuario   = $cod_usuario;
//    }
}