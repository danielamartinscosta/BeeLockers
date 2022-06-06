<?php

// inserir os dados no formulário 
$razao_social = $_POST['razao_social'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];



include "connect.php";

// variavel da query
$sql = "INSERT INTO parceria (
    razao_social,
    cnpj, 
    email,  
    telefone, 
    senha    
    ) VALUES (
        '$razao_social',
        '$cnpj',
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

header("location:../view/cadastroPraia.php");