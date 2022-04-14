<?php

// inserir os dados no formulário 
$nome_praia = $_POST['nome_praia'];
$nome_responsavel = $_POST['nome_responsavel'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


include "connect.php";

// variavel da query
$sql = "INSERT INTO cadastro_usuario (
    nome_praia,
    nome_responsavel, 
    email, 
    telefone, 
    senha 
    
    ) VALUES (
        '$nome_praia',
        '$nome_responsavel',
        '$email',
        '$telefone',
        '$senha'
    )";

// realizar o insert de dados
$result = $conn->query($sql);

// testar se o cadastro foi feito com sucesso
if ($result) {
    echo "cadastro realizado com sucesso!";
} else {
    echo "Cadastro não realizado, tente novamente";
}

header("location:../view/exibirPraia.php");