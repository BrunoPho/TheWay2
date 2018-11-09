<html>
<head>
  <title>Enviando E-mail com PHP - DevMedia</title>
  <link rel="stylesheet" type="text/css" href="../../assets/css/meu_CSS/estilo.css">

    <style type='text/css'>
        body {
            margin:0px;
            font-family:Verdane;
            font-size:12px;
            color: #666666;
        }
        a{
            color: #666666;
            text-decoration: none;
        }
        a:hover {
            color: #FF0000;
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div id="contato_form">
      <form action="../controllers/" name="form_contato" method="post" >
      <p class="titulo">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
          <tr>
            <td>Nome:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="nome" maxlength="40" />
            </td>
          </tr>
          <tr>
            <td>E-mail:<sup class="asteristico">*</sup></td>
            <td>
              <input type="email" name="email" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td>Telefone:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="telefone" maxlength="14" />
            </td>
          </tr>
          <tr>
            <td>Opções:<sup class="asteristico">*</sup></td>
            <td>
              <select name="escolhas" class="campo_input">
                <option value="Opção 1">Opção 1</option>
                <option value="Opção 2">Opção 2</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Mensagem:<sup class="asteristico">*</sup></td>
            <td>
              <textarea name="msg" cols="16" rows="5"></textarea>
            </td>
          </tr>
          <tr align="right";>
            <td colspan="2">
              <input type="reset" class="campo_submit" value="Limpar" />
              <input type="submit" class="campo_submit" value="Enviar" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
          </tr>
        </table>
      </form>
    </div>

// Compo E-mail
$arquivo = "
<html>
<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
    <tr>
        <td>
    <tr>
        <td width='500'>Nome:$nome</td>
    </tr>
    <tr>
        <td width='320'>E-mail:<b>$email</b></td>
    </tr>
    <tr>
        <td width='320'>Telefone:<b>$telefone</b></td>
    </tr>
    <tr>
        <td width='320'>Opções:$escolhas</td>
    </tr>
    <tr>
        <td width='320'>Mensagem:$nome</td>
    </tr>
    </td>
    </tr>
    <tr>
        <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
    </tr>
</table>
</body>
</html>

<html>
     ";
<html>

<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$opcoes = $_POST['escolhas'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


//enviar

// emails para quem será enviado o formulário
$emailenviar = "seuemail@seudominio.com.br";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
}
?>