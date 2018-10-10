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

    <h1>cadastro caminhoneiros</h1>


    <form class="form-horizontal" method="POST" action="caminhoneiro.php?acao=cadastrar"><!-- Form - Inicio do formulario -->

        <fieldset><!-- conjunto de campos -->

            <!-- Text input (Nome)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['nome'] ?>" id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="" title="Preencha com seu primeiro">
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
                    <input id="telefone" name="telefone" type="tel" pattern="^\d{2}\d{4}\d{4}$" placeholder="Telefone" class="form-control input-md" required="" title="Digite seu numero de telefone (DD)XXXX-XXXX">
                </div>
            </div>

            <!-- Password input (Senha)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="senha"></label>
                <div class="col-md-4">
                    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Text input (rg)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="rg"></label>
                <div class="col-md-4">
                    <input id="rg" name="rg" type="number" placeholder="RG" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input (cpf)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cpf"></label>
                <div class="col-md-4">
                    <input id="cpf" name="cpf" type="number" placeholder="CPF" class="form-control input-md" required="">
                </div>
                <!-- Text input (cidade)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cidade"></label>
                    <div class="col-md-4">
                        <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Text input (num_antt)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="num_antt"></label>
                    <div class="col-md-4">
                        <input id="num_antt" name="num_antt" type="number" placeholder="Numero da A.N.T.T." class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (num_cnh)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="num_cnh"></label>
                    <div class="col-md-4">
                        <input id="num_cnh" name="num_cnh" type="number" placeholder="Numero do C.N.H." class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (categoria_cnh)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="categoria_cnh"></label>
                    <div class="col-md-4">
                        <input id="categoria_cnh" name="categoria_cnh" type="text" placeholder="Categoria do C.N.H." class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Botões -->
                <!-- Button (Double) - Botão (Cancelar) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" type="botton1"></label>
                    <div class="col-md-8">
                        <!--<a href="cadastroC2.html" class="btn btn-success" role="button"> Prosseguir </a>-->
                        <a href="../../../index.html" class="btn btn-danger" role="button"> Cancelar   </a>
                        <button class="btn btn-info" type="submit"> Enviar </button>
                    </div>
                </div>

                <!-- Botão para Home -->
                <div class="form-group">
                    <label class="col-md-4 control-label" type="botton1"></label>
                    <div class="col-md-8">
                        <!--<a href="menuDeCadastros.html" class="btn btn-warning" role="button"> Voltar </a>-->
                    </div>
                    <!-- /Botões -->
                </div>

        </fieldset>
    </form> <!-- /Form - Fim do formulario -->




</div>
<!-- /container-->



</body>
</html>