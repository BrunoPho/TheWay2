<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Hello, serviços! </title>

</head>
<body>

    <div class="container">

        <p><h1> Lista serviços </h1></p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"> Código        </th>
                <th scope="col"> nome          </th>
                <th scope="col"> email         </th>
                <th scope="col"> telefone      </th>
                <th scope="col"> senha         </th>
                <th scope="col"> razao_social  </th>
                <th scope="col"> cnpj          </th>
                <th scope="col"> num_antt      </th>
                <th scope="col"> num_cnh       </th>
                <th scope="col"> categoria_cnh </th>
                <th scope="col"> cidade        </th>
                <th scope="col">     #         </th>
                <th scope="col">     #         </th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($listaservicos as $servico): ?>

            <tr>
                <th scope="row"><?= $servico['cod_servico'] ?></th>
                <td><?= $servico['nome'] ?></td>
                <td><?= $servico['email'] ?></td>
                <td><?= $servico['telefone'] ?></td>
                <td><?= $servico['senha'] ?></td>
                <td><?= $servico['rg'] ?></td>
                <td><?= $servico['cpf'] ?></td>
                <td><?= $servico['num_antt'] ?></td>
                <td><?= $servico['num_cnh'] ?></td>
                <td><?= $servico['categoria_cnh'] ?></td>
                <td><?= $servico['cod_cidade'] ?></td>
                <td><a class="btn btn-info"   href="http://localhost/TheWay2-master/app/controllers/servico.php?acao=editar&id_servico= <?= $servico['cod_servico'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger" href="http://localhost/TheWay2-master/app/controllers/servico.php?acao=excluir&id_servico=<?= $servico['cod_servico'] ?>"> Excluir </a></td>
            </tr>

            <?php endforeach; ?>

            </tbody>
        </table>


    </div>



</body>
</html>