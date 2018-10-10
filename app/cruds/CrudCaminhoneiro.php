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



    //Cadastra o usuario caminhoneiro
    public function salvar (Caminhoneiro $caminhoneiro){

        try {

            $sql = "INSERT INTO caminhoneiro (nome, email, telefone, senha, rg, cpf, num_antt, num_cnh, categoria_cnh, cod_cidade)
                VALUES ('$caminhoneiro->nome', '$caminhoneiro->email', '$caminhoneiro->telefone', '$caminhoneiro->senha', '$caminhoneiro->rg', '$caminhoneiro->cpf', '$caminhoneiro->num_antt', '$caminhoneiro->num_cnh', '$caminhoneiro->categoria_cnh', $caminhoneiro->cod_cidade)";
            $this->conexao->exec($sql);

        } catch (Exception $e){
            echo "deu um errro";
        }


    }

    //Busca usuario caminhoneiro
    public function getCaminhoneiro (int $cod_caminhoneiro){

        // Substitui o $consultausuarios por $consulta
        return $this->conexao->query("SELECT * FROM caminhoneiro WHERE cod_caminhoneiro= $cod_caminhoneiro")->fetch();

        //return new usuario($usuario['nome'], $usuario['email'], $usuario['telefone'], $usuario['senha'], $usuario['rg'], $usuario['cpf'], $usuario['cidade'], $usuario['num_cnh']);
    }



//

//

//
//    //Exclui o usuario
//    public function excluirusuario ($x){
//
//        $this->conexao->exec("DELETE from caminhoneiro where cod_caminhoneiro = $x");
//}
//
//    //Edita as informações do usuario
//    public function editar ($nome, $email, $telefone, $senha, $rg, $cpf, $cidade, $num_cnh){
//
//        $this->conexao->exec("UPDATE caminhoneiro SET nome = $nome, email = $email, telefone = $telefone, senha = $senha, rg = $rg, cpf = $cpf, cidade = $cidade,  num_cnh = $num_cnh WHERE caminhoneiro.cod_caminhoneiro = $id; ");
//    }
//
//    //login
//    public function login ($usuario, $senha, $cod_caminheiro){
//
//        // Substitui o $consultausuarios por $consulta
//        $consulta->conexao->query("SELECT * FROM caminhoneiro WHERE cod_caminhoneiro = $cod_caminheiro");
//        $usuario = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new usuario($usuario['nome'], $usuario['senha'], $usuario['telefone'], $usuario['senha'], $usuario['rg'], $usuario['cpf'], $usuario['cidade'], $usuario['num_cnh']);
//
//    }

}
