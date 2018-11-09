<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Hello, Transportadoras! </title>
</head>
<body>

<div class="container">

    <h1> Lista de Transportadoras </h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col"> Código             </th>
            <th scope="col"> nome               </th>
            <th scope="col"> email              </th>
            <th scope="col"> telefone           </th>
            <th scope="col"> senha              </th>
            <th scope="col"> N° de Razao social </th>
            <th scope="col"> CNPJ               </th>
            <th scope="col"> Código de cidade   </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($listatransportadoras as $transportadora): ?>

            <tr>
                <th scope="row"><?= $transportadora['cod_transportadora'] ?></th>
                <td><?= $transportadora['nome']              ?> </td>
                <td><?= $transportadora['email']             ?> </td>
                <td><?= $transportadora['telefone']          ?> </td>
                <td><?= $transportadora['senha']             ?> </td>
                <td><?= $transportadora['razao_social']      ?> </td>
                <td><?= $transportadora['cnpj']              ?> </td>
                <td><?= $transportadora['cidade_cod_cidade'] ?> </td>
                <td><a class="btn btn-info"    href="http://localhost/TheWay2-master/app/controllers/transportadora.php?acao=editar&id_transportadora= <?= $transportadora['cod_transportadora'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger"  href="http://localhost/TheWay2-master/app/controllers/transportadora.php?acao=excluir&id_transportadora=<?= $transportadora['cod_transportadora'] ?>"> Excluir </a></td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>

</body>
</html>