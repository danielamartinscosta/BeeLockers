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
$id_tipo = $_POST['id_tipo'];

include "connect.php";

// variavel da query
$sql = "INSERT INTO parceria (
    razao_social, 
    email,  
    telefone,
    cnpj, 
    senha,
    id_tipo

    ) VALUES (
        '$razao_social',
        '$email',
        '$telefone',
        '$cnpj',
        '$senha',
        '$id_tipo'
    )";

// realizar o insert de dados
$result = $conn->query($sql);


// testar se o cadastro foi feito com sucesso
if ($result) {
    session_start();
    $_SESSION['email_session'] = $email;
    $_SESSION['nome_session'] = $nome;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['cpf_session'] = $cnpj;
    $_SESSION['telefone_session'] = $telefone;
    header("location:../view/cadastroPraia.php");
} else {
    echo "Cadastro não realizado, tente novamente";
    echo $sql;
};
