<?php

require_once __DIR__."/../conexao/Conexao.php";

class Estado {

    public $cod_estado; //chave primaria no BD
    public $siglauf;
    public $nome;

    public function __construct() {

    }
}