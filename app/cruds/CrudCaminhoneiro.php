<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Caminhoneiro.php";

class Crudcaminhoneiro{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }


    public function getCaminhoneiros (){

        $listaCaminhoneiros = $this->conexao->query("SELECT * FROM caminhoneiro")->fetchAll();
        return $listaCaminhoneiros;
    }



    //Cadastra o usuário caminhoneiro
    public function salvar (Caminhoneiro $caminhoneiro){

        try {

            $sql = "INSERT INTO caminhoneiro (nome, email, telefone, senha, rg, cpf, num_antt, num_cnh, categoria_cnh, cod_cidade)
                VALUES ('$caminhoneiro->nome', '$caminhoneiro->email', '$caminhoneiro->telefone', '$caminhoneiro->senha', '$caminhoneiro->rg', '$caminhoneiro->cpf', '$caminhoneiro->num_antt', '$caminhoneiro->num_cnh', '$caminhoneiro->categoria_cnh', $caminhoneiro->cod_cidade)";
            $this->conexao->exec($sql);

        } catch (Exception $e){
            
            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');
   
           }


    }

    //Busca o usuário caminhoneiro
    public function getCaminhoneiro (int $cod_caminhoneiro){

      return $this->conexao->query("SELECT * FROM caminhoneiro WHERE cod_caminhoneiro = $cod_caminhoneiro")->fetch();

        //return new caminhoneiro($caminhoneiro['nome'], $caminhoneiro['email'], $caminhoneiro['telefone'], $caminhoneiro['senha'], $caminhoneiro['rg'], $caminhoneiro['cpf'], $caminhoneiro['cidade'], $caminhoneiro['num_cnh']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário caminhoneiro
    public function editar ($nome, $email, $telefone, $senha, $rg, $cpf, $num_cnh, $cod_cidade){

        $this->conexao->exec("UPDATE caminhoneiro SET nome = $nome, email = $email, telefone = $telefone, senha = $senha, rg = $rg, cpf = $cpf,  num_cnh = $num_cnh, cod_cidade = $cod_cidade WHERE caminhoneiro.cod_caminhoneiro = $id; ");
    }

    //Exclui o usuário caminhoneiro
    public function excluircaminhoneiro ($x){

        $this->conexao->exec("DELETE from caminhoneiro where cod_caminhoneiro = $x");
}

//
//    //login
//    public function login ($caminhoneiro, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM caminhoneiro WHERE cod_caminhoneiro = $cod_caminheiro");
//      
//  $caminhoneiro = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new caminhoneiro($caminhoneiro['nome'], $caminhoneiro['senha'], $caminhoneiro['telefone'], $caminhoneiro['senha'], $caminhoneiro['rg'], $caminhoneiro['cpf'], $caminhoneiro['num_cnh'], $caminhoneiro['cod_cidade']);
//
//    }

}
