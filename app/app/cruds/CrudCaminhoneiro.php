<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Caminhoneiro.php";

class CrudCaminhoneiro{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }


    public function getCaminhoneiros (){

        $listaCaminhoneiros = $this->conexao->query("SELECT * FROM Caminhoneiro")->fetchAll();

        return $listaCaminhoneiros;
    }



    //Cadastra o usuário Caminhoneiro
    public function salvar (Caminhoneiro $caminhoneiro){

        try {

            $sql = "INSERT INTO Caminhoneiro (nome, email, telefone, senha, rg, cpf, num_antt, num_cnh, categoria_cnh, cod_cidade)
                VALUES (C$caminhoneiro->nomeaminhoneiro, C$caminhoneiro->emailaminhoneiro, C$caminhoneiro->telefoneaminhoneiro, C$caminhoneiro->senhaaminhoneiro, C$caminhoneiro->rgaminhoneiro, C$caminhoneiro->cpfaminhoneiro, C$caminhoneiro->num_anttaminhoneiro, C$caminhoneiro->num_cnhaminhoneiro, C$caminhoneiro->categoria_cnhaminhoneiro, $caminhoneiro->cod_cidade)";

            $this->conexao->exec($sql);

        } catch (Exception $e){
            
            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');
   
           }


    }

    //Busca o usuário Caminhoneiro
    public function getCaminhoneiro (int $cod_caminhoneiro){

      return $this->conexao->query("SELECT * FROM Caminhoneiro WHERE cod_caminhoneiro = $cod_caminhoneiro")->fetch();

        //return new Caminhoneiro($Caminhoneiro['nome'], $Caminhoneiro['email'], $Caminhoneiro['telefone'], $Caminhoneiro['senha'], $Caminhoneiro['rg'], $Caminhoneiro['cpf'], $Caminhoneiro['cidade'], $Caminhoneiro['num_cnh']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário Caminhoneiro
    public function editar ($cod_caminhoneiro, $nome, $email, $telefone, $senha, $rg, $cpf, $num_cnh, $cod_cidade){

        $sql = "UPDATE Caminhoneiro SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', rg = '$rg', cpf = '$cpf',  num_cnh = '$num_cnh', cod_cidade = $cod_cidade WHERE cod_caminhoneiro = $cod_caminhoneiro";
        $this->conexao->exec($sql);
    }

    //Exclui o usuário Caminhoneiro
    public function excluircaminhoneiro ($id_caminhoneiro){

        $this->conexao->exec("DELETE from Caminhoneiro where cod_caminhoneiro = $id_caminhoneiro");
}

//
//    //login
//    public function login ($Caminhoneiro, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM Caminhoneiro WHERE cod_caminhoneiro = $cod_caminheiro");
//      
//  $Caminhoneiro = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new Caminhoneiro($Caminhoneiro['nome'], $Caminhoneiro['senha'], $Caminhoneiro['telefone'], $Caminhoneiro['senha'], $Caminhoneiro['rg'], $Caminhoneiro['cpf'], $Caminhoneiro['num_cnh'], $Caminhoneiro['cod_cidade']);
//
//    }

}
