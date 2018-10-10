<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <h1>lista caminhoneiros</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col"> Código        </th>
            <th scope="col"> nome          </th>
            <th scope="col"> email         </th>
            <th scope="col"> telefone      </th>
            <th scope="col"> senha         </th>
            <th scope="col"> razao_social </th>
            <th scope="col"> cnpj          </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($listaTransportadoras as $transportadora): ?>
            <tr>
                <th scope="row"><?= $transportadora['cod_transportadora'] ?></th>
                <td><?= $transportadora['nome'] ?></td>
                <td><?= $transportadora['email'] ?></td>
                <td><?= $transportadora['telefone'] ?></td>
                <td><?= $transportadora['senha'] ?></td>
                <td><?= $transportadora['razao_social'] ?></td>
                <td><?= $transportadora['cnpj'] ?></td>
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>


</div>



</body>
</html>