<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Cadestre-se transportadora </title>
</head>
<body>

<div class="container">

    <h1> Cadastro transportadoras </h1>

    <!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../../controllers/transportadora.php?acao=cadastrar">

        <fieldset><!-- conjunto de campos -->

            <!-- Text input (Nome)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome"></label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="" title="Preencha com seu primeiro">
                </div>
            </div>

            <!-- Text input (Email)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email"></label>
                <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="E-mail" class="form-control input-md" required="" title="Preencha com seu G-mail ou E-mail">
                </div>
            </div>

            <!-- Text input (Telefone)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telefone"></label>
                <div class="col-md-4">
                    <input id="telefone" name="telefone" type="tel" pattern="^\d{2}\d{5}\d{4}$" placeholder="Telefone" class="form-control input-md" required="" title="Digite seu numero de telefone (DD)XXXXX-XXXX">
                </div>
            </div>

            <!-- Password input (Senha)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="senha"></label>
                <div class="col-md-4">
                    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Text input (razao_social)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="razao_social"></label>
                <div class="col-md-4">
                    <input id="razao_social" name="razao_social" type="number" placeholder="Numero de razao social" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input (cnpj)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cnpj"></label>
                <div class="col-md-4">
                    <input id="cnpj" name="cnpj" type="number" placeholder="cnpj" class="form-control input-md" required="">
                </div>

                <!-- Text input (cidade)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cidade"></label>
                    <div class="col-md-4">
                        <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Botões -->
                <!-- Button (Double) - Botão (Cancelar) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" type="botton1"></label>
                    <div class="col-md-8">
                        <a href="../../../index.html" class="btn btn-danger" role="button"> Cancelar </a>
                        <button class="btn btn-info" type="submit"> Enviar </button>
                    </div>
                </div>
            </div>

        </fieldset>
    </form> <!-- /Form - Fim do formulario -->

</div>
<!-- /container-->

</body>
</html>
