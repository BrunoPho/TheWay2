<?php

require_once __DIR__."/../conexao/Conexao.php";

class Status_servico {

    public $cod_status; //chave primaria no BD
    public $desc_status;

    public function __construct() {

    }
}