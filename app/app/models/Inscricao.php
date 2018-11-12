<?php

require_once __DIR__."/../conexao/Conexao.php";

class Inscricao {

    public $cod_servico; //chave primaria no BD
    public $data_insc;
    public $status;

    public function __construct() {

    }
}