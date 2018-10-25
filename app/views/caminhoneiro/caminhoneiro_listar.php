<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Lista de Caminhoneiros </title>

</head>
<body>

    <div class="container">

        <p><h1> Lista caminhoneiros </h1></p>

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

            <?php foreach ($listaCaminhoneiros as $caminhoneiro): ?>
            <tr>
                <th scope="row"><?= $caminhoneiro['cod_caminhoneiro'] ?></th>
                <td><?= $caminhoneiro['nome'] ?></td>
                <td><?= $caminhoneiro['email'] ?></td>
                <td><?= $caminhoneiro['telefone'] ?></td>
                <td><?= $caminhoneiro['senha'] ?></td>
                <td><?= $caminhoneiro['rg'] ?></td>
                <td><?= $caminhoneiro['cpf'] ?></td>
                <td><?= $caminhoneiro['num_antt'] ?></td>
                <td><?= $caminhoneiro['num_cnh'] ?></td>
                <td><?= $caminhoneiro['categoria_cnh'] ?></td>
                <td><?= $caminhoneiro['cod_cidade'] ?></td>
                <td><a class="btn btn-info"    href="http://localhost/TheWay2-master/app/controllers/caminhoneiro.php?acao=editar&id_caminhoneiro=<?= $caminhoneiro['cod_caminhoneiro'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger" href="http://localhost/TheWay2-master/app/controllers/caminhoneiro.php?acao=excluir&id_caminhoneiro=<?= $caminhoneiro['cod_caminhoneiro'] ?>"> Excluir </a></td>
            </tr>

            <?php endforeach; ?>

            </tbody>
        </table>


    </div>



</body>
</html>