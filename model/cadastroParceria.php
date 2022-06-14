<?php

/* describe parceria;
+--------------+--------------+------+-----+-------------------+----------------+
| Field        | Type         | Null | Key | Default           | Extra          |
+--------------+--------------+------+-----+-------------------+----------------+
| id_empresa   | int(11)      | NO   | PRI | NULL              | auto_increment |
| id_praia     | int(11)      | NO   | MUL | NULL              |                |
| razao_social | varchar(255) | YES  |     | NULL              |                |
| cnpj         | varchar(18)  | YES  |     | NULL              |                |
| email        | varchar(255) | YES  | UNI | NULL              |                |
| telefone     | varchar(12)  | YES  |     | NULL              |                |
| senha        | varchar(255) | YES  |     | NULL              |                |
| id_tipo      | int(11)      | YES  |     | NULL              |                |
| data         | timestamp    | YES  |     | CURRENT_TIMESTAMP |                |
+--------------+--------------+------+-----+-------------------+----------------+
*/

// inserir os dados no formulário 
$razao_social = $_POST['razao_social'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];

include "connect.php";

// variavel da query
$sqlParceria = "INSERT INTO parceria (
    razao_social, 
    email,  
    telefone,
    cnpj, 
    senha

    ) VALUES (
        '$razao_social',
        '$email',
        '$telefone',
        '$cnpj',
        '$senha'
    )";

// realizar o insert de dados
$resultParceria = $conn->query($sqlParceria);


echo "$razao_social<br> $cnpj<br> $email<br> $telefone<br>$senha<br>";

// testar se o cadastro foi feito com sucesso
if ($resultParceria) {
    echo "cadastro realizado com sucesso!";
} else {
    echo "Cadastro não realizado, tente novamente";
}

//header("location:../view/cadastroPraia.php");