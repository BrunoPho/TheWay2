<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Seus dados! </title>
</head>
<body>

<div class="container">

    <h1> Edite seus dados </h1>

<!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../../controllers/caminhoneiro.php?acao=salvar_editar">

        <fieldset><!-- conjunto de campos -->


            <input type="hidden" name="id_caminhoneiro" value="<?= $_GET['id_caminhoneiro'] ?>">

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
                    <input value="<?= $caminhoneiro['email'] ?>" id="email" name="email" type="email" placeholder="E-mail" class="form-control input-md" required="" title="Preencha com seu G-mail ou E-mail">
                </div>
            </div>

            <!-- Text input (Telefone)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telefone"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['telefone'] ?>" id="telefone" name="telefone" type="tel" pattern="^\d{2}\d{5}\d{4}$" placeholder="Telefone" class="form-control input-md" required="" title="Digite seu numero de telefone (DD)XXXX-XXXX">
                </div>
            </div>

            <!-- Password input (Senha)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="senha"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['senha'] ?>" id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Text input (rg)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="rg"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['rg'] ?>" id="rg" name="rg" type="number" placeholder="RG" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input (cpf)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cpf"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['cpf'] ?>" id="cpf" name="cpf" type="number" placeholder="CPF" class="form-control input-md" required="">
                </div>
                <!-- Text input (cidade)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cidade"></label>
                    <div class="col-md-4">
                        <input value="<?= $caminhoneiro['cod_cidade'] ?>" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Text input (num_antt)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="num_antt"></label>
                    <div class="col-md-4">
                        <input value="<?= $caminhoneiro['num_antt'] ?>" id="num_antt" name="num_antt" type="number" placeholder="Numero da A.N.T.T." class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (num_cnh)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="num_cnh"></label>
                    <div class="col-md-4">
                        <input value="<?= $caminhoneiro['num_cnh'] ?>" id="num_cnh" name="num_cnh" type="number" placeholder="Numero do C.N.H." class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (categoria_cnh)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="categoria_cnh"></label>
                    <div class="col-md-4">
                        <input value="<?= $caminhoneiro['categoria_cnh'] ?>" id="categoria_cnh" name="categoria_cnh" type="text" placeholder="Categoria do C.N.H." class="form-control input-md" required="">

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