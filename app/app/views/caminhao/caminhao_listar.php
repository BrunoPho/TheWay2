<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Hello, world! </title>
</head>
<body>

<div class="container">

    <h1>lista caminhoneiros</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col"> Código                 </th>
            <th scope="col"> ano do modelo          </th>
            <th scope="col"> ano da frabricação     </th>
            <th scope="col"> capacidade             </th>
            <th scope="col"> código de modelo       </th>
            <th scope="col"> cod tipo do caminhão   </th>
            <th scope="col"> código do caminhoneiro </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($listaCaminhaos as $caminhao): ?>
            <tr>
                <th scope="row"><?= $caminhao['cod_transpotadora'] ?></th>
                <td><?= $caminhao['ano_modelo'] ?></td>
                <td><?= $caminhao['ano_frabricação'] ?></td>
                <td><?= $caminhao['capacidade'] ?></td>
                <td><?= $caminhao['cod_modelo'] ?></td>
                <td><?= $caminhao['cod_tipo'] ?></td>
                <td><?= $caminhao['cod_caminhao'] ?></td>
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>


</div>



</body>
</html>