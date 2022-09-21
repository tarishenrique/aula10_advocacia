<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Escritório de Advocacia</title>
        <meta charset="utf-8">

        <!-- REFERÊNCIAS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="images/demo/balanca png.png" />
        <script src="Mascara.js"></script>


        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>

        <!-- INCLUSÃO DO CABEÇALHO DA PÁGINA -->
        <?php
        include 'cabecalho.php';
        ?>



        <!-- INICIO DO CORPO DA PÁGINA -->
        <form name="formEditar" action="" method="">
            <div class="container-fluid">
                <div class="container" id="formulario">
                    <h4>Editar dados da conta</h4>
                    <p>DADOS PESSOAIS.</p>
                    <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" name="txtNome" placeholder="Nome Completo" required="required"/>

                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" name="txtCPF" placeholder="CPF" required="required" onKeyUp="formataCPF(this, event)" MaxLength="14"/>

                    </div>
                    <div class="form-group">


                        <label>Numero de Identificação da OAB</label>
                        <input type="text" class="form-control" name="txtIdentificacaoOAB" placeholder="Identificador da OAB" required="required" />

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txtEmail" placeholder="E-mail principal" required="required" />

                    </div>
                    <br />
                    <div class="form-group">

                        <input type="submit" class="btn btn-success" name="btAtualizar" value="Atualizar" />

                                            <input type="button" class="btn btn-success" name="btRemover" value="Remover" />

                    </div>


                </div>
            </div>
        </form>
        <!-- FIM DO CORPO DA PÁGINA -->

        <!-- INCLUSÃO DO RODAPÉ DA PÁGINA -->
        <?php
        include 'rodape.php';
        ?>

    </body>
</html>
