<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Caminhao.php";

class CrudCaminhao
{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct() {

        $this->conexao = Conexao::getConexao();
    }


    public function getCaminhao() {

        $listaCaminhoes = $this->conexao->query("SELECT * FROM caminhao")->fetchAll();
        return $listaCaminhoes;
    }
}