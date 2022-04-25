<?php

// inserir os dados no formulário 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$dtnasc = $_POST['dtnasc'];


include "connect.php";

// variavel da query
$sql = "INSERT INTO usuario (
    nome,
    cpf, 
    email, 
    sexo, 
    telefone, 
    senha, 
    dtnasc 
    
    ) VALUES (
        '$nome',
        '$cpf',
        '$email',
        '$sexo',
        '$telefone',
        '$senha',
        '$dtnasc'
    )";

// realizar o insert de dados
$result = $conn->query($sql);

// testar se o cadastro foi feito com sucesso
if ($result) {
    echo "cadastro realizado com sucesso!";
} else {
    echo "Cadastro não realizado, tente novamente";
}

header("location:../view/cadastroUsuario.php");