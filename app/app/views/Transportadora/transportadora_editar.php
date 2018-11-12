<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Tela de edição de seus dados! </title>

</head>
<body>

<div class="container">

    <h1> Edite seus dados </h1>

    <!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../controllers/transportadora.php?acao=salvar_editar">

        <fieldset><!-- conjunto de campos -->


            <input type="hidden" name="id_transportadora" value="<?= $_GET['id_transportadora'] ?>">

            <!-- Text input (Nome)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['nome'] ?>" id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="" title="Preencha com seu primeiro">
                </div>
            </div>

            <!-- Text input (Email)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['email'] ?>" id="email" name="email" type="email" placeholder="E-mail" class="form-control input-md" required="" title="Preencha com seu G-mail ou E-mail">
                </div>
            </div>

            <!-- Text input (Telefone)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telefone"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['telefone'] ?>" id="telefone" name="telefone" type="tel" pattern="^\d{2}\d{5}\d{4}$" placeholder="Telefone" class="form-control input-md" required="" title="Digite seu numero de telefone (DD)XXXX-XXXX">
                </div>
            </div>

            <!-- Password input (Senha)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="senha"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['senha'] ?>" id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Text input (razao_social)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="razao_social"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['razao_social'] ?>" id="razao_social" name="razao_social" type="number" placeholder="Numero de razao social" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input (cnpj)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cnpj"></label>
                <div class="col-md-4">
                    <input value="<?= $transportadora['cnpj'] ?>" id="cnpj" name="cnpj" type="number" placeholder="CNPJ" class="form-control input-md" required="">
                </div>

                <!-- Text input (cidade)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cidade"></label>
                    <div class="col-md-4">
                        <input value="<?= $transportadora['cod_cidade'] ?>" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Botões -->
                <!-- Button (Double) - Botão (Cancelar) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" type="botton1"></label>
                    <div class="col-md-8">
                        <!--<a href="cadastroC2.html" class="btn btn-success" role="button"> Prosseguir </a>-->
                        <a href="../../../index.html" class="btn btn-danger" role="button"> Cancelar </a>
                        <button class="btn btn-info" type="submit"> Atualizar </button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form> <!-- /Form - Fim do formulario -->
</div>

</body>
</html>