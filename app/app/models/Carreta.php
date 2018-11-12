<?php

require_once __DIR__."/../conexao/Conexao.php";

class Carreta {

    public $cod_carreta; //chave primaria no BD
    public $ano_fabricacao;
    public $ano_modelo;
    public $cod_produto;

    public function __construct() { // Não é obrigado a passar ano_modelo e ano_fabricacao

    }
}
