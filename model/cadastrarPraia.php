<?php

// inserir os dados no formulário 
$nome_praia = $_POST['nome_praia'];
$imagem_praia = $_POST['imagem_praia'];
$endereco_praia = $_POST['endereco_praia'];


include "connect.php";

// variavel da query
$sql = "INSERT INTO cadastro_usuario (
    nome_praia,
    imagem_praia, 
    endereco_praia
    
    ) VALUES (
        '$nome_praia',
        '$imagem_praia',
        '$endereco_praia'
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