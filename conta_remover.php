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

    $identificacao_oab = $_POST["txtIdentificacaoOAB"];

    $sql = "DELETE FROM advogado WHERE identificacao_oab = '$identificacao_oab'";

    if (executarComando($sql)) {
        echo "<h1>Conta apagada</h1>";
    } else {
        echo "<h1>Verifique os dados informados</h1>";
    }

    ?>

</body>

</html>