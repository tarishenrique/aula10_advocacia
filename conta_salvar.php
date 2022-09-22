<?php

include './conexao_bd.php';

$oab = $_POST["txtOAB"];
$nome = $_POST["txtNome"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];

$sql = "INSERT INTO advogado (identificacao_oab, nome, cpf, email) 
        VALUES ('$oab', '$nome', '$cpf', '$email') ";

if (executarComando($sql)) {
    echo "<h1>Conta adicionada</h1>";
} else {
    echo "<h1>Verifique os dados informados</h1>";
}