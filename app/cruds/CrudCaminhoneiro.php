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
    public function editar ($cod_caminhoneiro, $nome, $email, $telefone, $senha, $rg, $cpf, $num_cnh, $cod_cidade){

        $sql = "UPDATE caminhoneiro SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', rg = '$rg', cpf = '$cpf',  num_cnh = '$num_cnh', cod_cidade = $cod_cidade WHERE cod_caminhoneiro = $cod_caminhoneiro";
        $this->conexao->exec($sql);
    }

    //Exclui o usuário caminhoneiro
    public function excluircaminhoneiro ($id_caminhoneiro){

        $this->conexao->exec("DELETE from caminhoneiro where cod_caminhoneiro = $id_caminhoneiro");
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

$crud = new Crudcaminhoneiro();
$crud->editar(5, "jfferson1643", "asjdasj@jshhsdf.com", "111", "11", "11", "11", "11", 1);
