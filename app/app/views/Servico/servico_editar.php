<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Tela de edição de serviço </title>

</head>
<body>

<div class="container">

    <h1> Edite seus dados </h1>

    <!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../../controllers/servico.php?acao=salvar_editar">

        <fieldset><!-- conjunto de campos -->


            <input type="hidden" name="id_servico" value="<?= $_GET['id_servico'] ?>">

            <!-- Text input (numero_seguro)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="numero_seguro"></label>
                <div class="col-md-4">
                    <input id="numero_seguro" name="numero_seguro" type="number" placeholder="Numero de seguro" class="form-control input-md" value="" required="" title="Preencha com seu numero de seguro">
                </div>
            </div>

            <!-- Text input (data_entrega)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="data_entrega"></label>
                <div class="col-md-4">
                    <input id="data_entrega" name="data_entrega" type="date" placeholder="data_entrega" class="form-control input-md" value="" required="" title="Preencha com a data de entraga do serviço">
                </div>
            </div>

            <!-- Text input (cod_servico)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_servico"></label>
                <div class="col-md-4">
                    <input id="cod_servico" name="cod_servico" type="number" pattern="" placeholder="Código de serviço" class="form-control input-md" value="" required="" title="Código de serviço">
                </div>
            </div>

            <!-- Text input (data_cadastro)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="data_cadastro"></label>
                <div class="col-md-4">
                    <input id="data_cadastro" name="data_cadastro" type="date" placeholder="Data de cadastro do serviço" class="form-control input-md" value="" required="">

                </div>
            </div>


            <!-- Text input (quantidade)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="quantidade"></label>
                <div class="col-md-4">
                    <input id="quantidade" name="quantidade" type="number" placeholder="Quantidade de caminhoneiros" class="form-control input-md" value="" required="">

                </div>
            </div>

            <!-- Text input (data_retirada)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="data_retirada"></label>
                <div class="col-md-4">
                    <input id="data_retirada" name="data_retirada" type="date" placeholder="Data de finalição do serviço" class="form-control input-md" value="" required="">
                </div>

                <!-- Text input (data_retirada_prev)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="data_retirada_prev"></label>
                    <div class="col-md-4">
                        <input id="data_retirada_prev" name="data_retirada_prev" type="date" placeholder="Data da finalição prevista do serviço" class="form-control input-md" value="" required="">

                    </div>
                </div>
                <!-- Text input (data_entrega_prev)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="data_entrega_prev"></label>
                    <div class="col-md-4">
                        <input id="data_entrega_prev" name="data_entrega_prev" type="date" placeholder="Data da entraga prevista do serviço" class="form-control input-md" value="" required="">

                    </div>
                </div>

                <!-- Text input (cod_status)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cod_status"></label>
                    <div class="col-md-4">
                        <input id="cod_status" name="cod_status" type="number" placeholder="Código do estatus do serviço" class="form-control input-md" value="" required="">

                    </div>
                </div>

                <!-- Text input (cod_cidade)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cod_cidade"></label>
                    <div class="col-md-4">
                        <input id="cod_cidade" name="cod_cidade" type="text" placeholder="Cidade e região do serviço" class="form-control input-md" value="" required="">

                    </div>
                </div>

                <!-- Text input (cod_produto)-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cod_produto"></label>
                    <div class="col-md-4">
                        <input id="cod_produto" name="cod_produto" type="number" placeholder="Código do produto" class="form-control input-md" value="" required="">

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
<!--
<?/*= $caminhoneiro['numero_seguro'] */?>
<?/*= $caminhoneiro['data_entrega'] */?>
<?/*= $caminhoneiro['cod_servico'] */?>
<?/*= $caminhoneiro['data_cadastro'] */?>
<?/*= $caminhoneiro['quantidade'] */?>
<?/*= $caminhoneiro['data_retirada'] */?>
<?/*= $caminhoneiro['data_retirada_prev'] */?>
<?/*= $caminhoneiro['data_entrega_prev'] */?>
<?/*= $caminhoneiro['cod_status'] */?>
<?/*= $caminhoneiro['cod_cidade'] */?>
--><?/*= $caminhoneiro['cod_produto'] */?>