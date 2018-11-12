<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Servico.php";

class Crudservico{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }


    public function getservicos (){

        $listaservicos = $this->conexao->query("SELECT * FROM servico")->fetchAll();

        return $listaservicos;
    }



    //Cadastra o usuário servico
    public function salvar (servico $servico){

        try {

            $sql = "INSERT INTO servico (numero_seguro, data_entrega, cod_servico, data_cadastro, quantidade, data_retirada, data_retirada_prev, data_entrega_prev, cod_status, cod_cidade, cod_produto)
                VALUES ( '$servico->numero_seguro','$servico->data_entrega','$servico->cod_servico','$servico->data_cadastro','$servico->quantidade','$servico->data_retirada','$servico->data_retirada_prev','$servico->data_entrega_prev','$servico->cod_status','$servico->cod_cidade','$servico->cod_produto')";

            $this->conexao->exec($sql);

        } catch (Exception $e){

            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');

        }
    }

    //Busca o usuário servico
    public function getservico (int $cod_servico){

        return $this->conexao->query("SELECT * FROM servico WHERE cod_servico = $cod_servico")->fetch();

        //return new servico($servico['nome'], $servico['email'], $servico['telefone'], $servico['senha'], $servico['rg'], $servico['cpf'], $servico['cidade'], $servico['num_cnh']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário servico
    public function editar ($numero_seguro, $data_entrega, $cod_servico, $data_cadastro, $quantidade, $data_retirada, $data_retirada_prev, $data_entrega_prev, $cod_status, $cod_cidade, $cod_produto){

        $sql = "UPDATE servico SET numero_seguro = '$numero_seguro', data_entrega = '$data_entrega', cod_servico = '$cod_servico', data_cadastro = '$data_cadastro', quantidade = '$quantidade', data_retirada = '$data_retirada',  data_retirada_prev = '$data_retirada_prev', data_entrega_prev = $data_entrega_prev, cod_status = $cod_status, cod_cidade = $cod_cidade, cod_produto = $cod_produto WHERE cod_servico = $cod_servico";
        $this->conexao->exec($sql);
    }
    //   numero_seguro, data_entrega, cod_servico, data_cadastro, quantidade, data_retirada, data_retirada_prev, data_entrega_prev, cod_status, cod_cidade, cod_produto

    //Exclui o usuário servico
    public function excluirservico ($id_servico){

        $this->conexao->exec("DELETE from servico where cod_servico = $id_servico");
    }

//
//    //login
//    public function login ($servico, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM servico WHERE cod_servico = $cod_caminheiro");
//
//  $servico = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new servico($servico['nome'], $servico['senha'], $servico['telefone'], $servico['senha'], $servico['rg'], $servico['cpf'], $servico['num_cnh'], $servico['cod_cidade']);
//
//    }

}
