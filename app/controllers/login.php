<?php
     session_start();
     include('../conexao/Conexao.php');

   if (empty($_POST['email']) || empty($_POST['senha'])) {

     header('Location: ../views/loginT.php');

    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select caminhoneiro from caminhoneiro where caminhoneiro = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    $_SESSION['email'] = $usuario;

    header('Location: ../views/caminhoneiro/perfilCaminhoneiro.html');

    exit();

  } else {

    $_SESSION['nao_autenticado'] = true;

    header('Location: ../views/loginT.php');

    exit();
}
