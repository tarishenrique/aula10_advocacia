<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include './conexao_bd.php';

    $oab = $_POST["txtIdentificacaoOAB"];
    $nome = $_POST["txtNome"];
    $cpf = $_POST["txtCPF"];
    $email = $_POST["txtEmail"];

    $sql = "UPDATE advogado SET nome = '$nome', email = '$email', cpf = '$cpf' WHERE identificacao_oab = '$oab";

    if (executarComando($sql)) {
        echo "<h1>Conta adicionada</h1>";
    } else {
        echo "<h1>Verifique os dados informados</h1>";
    }
    ?>


</body>

</html>