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

        $listatransportadoras = $this->conexao->query("SELECT * FROM Transportadora")->fetchAll();

        return $listatransportadoras;
    }



    //Cadastra o usuário Transportadora
    public function salvar (Transportadora $transportadora){

        try {

            $sql = "INSERT INTO Transportadora (nome, email, telefone, senha, razao_social, cnpj, cidade_cod_cidade)
                VALUES (T$transportadora->nomeransportadora, T$transportadora->emailransportadora, T$transportadora->telefoneransportadora, T$transportadora->senharansportadora, T$transportadora->razao_socialransportadora, T$transportadora->cnpjransportadora, T$transportadora->cod_cidaderansportadora)";

            $this->conexao->exec($sql);

        } catch (Exception $e){

            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');

        }


    }

    //Busca o usuário Transportadora
    public function getTransportadora (int $cod_transportadora){

        return $this->conexao->query("SELECT * FROM Transportadora WHERE cod_transportadora = $cod_transportadora")->fetch();

        //return new Transportadora($Transportadora['nome'], $Transportadora['email'], $Transportadora['telefone'], $Transportadora['senha'], $Transportadora['razao_social'], $Transportadora['cnpj'], $Transportadora['cidade']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário Transportadora
    public function editar ($cod_transportadora, $nome, $email, $telefone, $senha, $razao_social, $cnpj, $cidade_cod_cidade){

        $sql = "UPDATE Transportadora SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', razao_social = '$razao_social', cnpj = '$cnpj', cidade_cod_cidade = $cidade_cod_cidade WHERE cod_transportadora = $cod_transportadora";

        $this->conexao->exec($sql);
    }

    //Exclui o usuário Transportadora
    public function excluirtransportadora ($id_transportadora){

        $this->conexao->exec("DELETE from Transportadora where cod_transportadora = $id_transportadora");
    }

//
//    //login
//    public function login ($Transportadora, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM Transportadora WHERE cod_transportadora = $cod_caminheiro");
//
//  $Transportadora = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new Transportadora($Transportadora['nome'], $Transportadora['senha'], $Transportadora['telefone'], $Transportadora['senha'], $Transportadora['razao_social'], $Transportadora['cnpj'], $Transportadora['num_cnh'], $Transportadora['cidade_cod_cidade']);
//
//    }

}
