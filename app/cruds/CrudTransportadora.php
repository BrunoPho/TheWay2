<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Transportadora.php";

class CrudTransportadora{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }


    public function gettransportadoras (){

        $listatransportadoras = $this->conexao->query("SELECT * FROM transportadora")->fetchAll();

        return $listatransportadoras;
    }



    //Cadastra o usuário transportadora
    public function salvar (Transportadora $transportadora){

        try {

            $sql = "INSERT INTO transportadora (nome, email, telefone, senha, razao_social, cnpj, cidade_cod_cidade)
                VALUES ('$transportadora->nome', '$transportadora->email', '$transportadora->telefone', '$transportadora->senha', '$transportadora->razao_social', '$transportadora->cnpj', '$transportadora->cod_cidade')";

            $this->conexao->exec($sql);

        } catch (Exception $e){

            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');

        }


    }

    //Busca o usuário transportadora
    public function getTransportadora (int $cod_transportadora){

        return $this->conexao->query("SELECT * FROM transportadora WHERE cod_transportadora = $cod_transportadora")->fetch();

        //return new transportadora($transportadora['nome'], $transportadora['email'], $transportadora['telefone'], $transportadora['senha'], $transportadora['razao_social'], $transportadora['cnpj'], $transportadora['cidade']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário transportadora
    public function editar ($cod_transportadora, $nome, $email, $telefone, $senha, $razao_social, $cnpj, $cidade_cod_cidade){

        $sql = "UPDATE transportadora SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', razao_social = '$razao_social', cnpj = '$cnpj', cidade_cod_cidade = $cidade_cod_cidade WHERE cod_transportadora = $cod_transportadora";

        $this->conexao->exec($sql);
    }

    //Exclui o usuário transportadora
    public function excluirtransportadora ($id_transportadora){

        $this->conexao->exec("DELETE from transportadora where cod_transportadora = $id_transportadora");
    }

//
//    //login
//    public function login ($transportadora, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM transportadora WHERE cod_transportadora = $cod_caminheiro");
//
//  $transportadora = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new transportadora($transportadora['nome'], $transportadora['senha'], $transportadora['telefone'], $transportadora['senha'], $transportadora['razao_social'], $transportadora['cnpj'], $transportadora['num_cnh'], $transportadora['cidade_cod_cidade']);
//
//    }

}
