<?php

include './conexao_bd.php';

$nome = $_POST['txtNome'];
$cpf = $_POST['txtCPF'];
$telefone = $_POST['txtTelefone'];
$email = $_POST['txtEmail'];
$turno = $_POST['selectTurno'];
$vara = $_POST['selectVara'];
$descricao_processo = $_POST['txtDescricao'];

$sql = "INSERT INTO orcamento(nome, cpf, telefone, email, turno, vara, descricao_processo) 
        VALUES ('$nome', '$cpf','$telefone','$email','$turno','$vara','$descricao_processo')";

if (executarComando($sql)) {
    echo "<h1>Orçamento enviado</h1>";
} else {
    echo "<h1>Não foi possível enviar</h1>";
}