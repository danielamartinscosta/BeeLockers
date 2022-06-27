<?php

/*
mysql> describe usuario;
+------------+--------------+------+-----+-------------------+----------------+
| Field      | Type         | Null | Key | Default           | Extra          |
+------------+--------------+------+-----+-------------------+----------------+
| id_usuario | int(11)      | NO   | PRI | NULL              | auto_increment |
| nome       | varchar(255) | YES  |     | NULL              |                |
| cpf        | varchar(14)  | YES  |     | NULL              |                |
| email      | varchar(255) | YES  | UNI | NULL              |                |
| sexo       | varchar(10)  | YES  |     | NULL              |                |
| telefone   | varchar(12)  | YES  |     | NULL              |                |
| senha      | varchar(255) | YES  |     | NULL              |                |
| dtnasc     | varchar(25)  | YES  |     | NULL              |                |
| id_praia   | int(11)      | YES  | MUL | NULL              |                |
| id_tipo    | int(11)      | YES  |     | NULL              |                |
| data       | timestamp    | YES  |     | CURRENT_TIMESTAMP |                |
+------------+--------------+------+-----+-------------------+----------------+
*/

// inserir os dados no formulário 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$dtnasc = $_POST['dtnasc'];
$id_tipo = $_POST['id_tipo'];



include "connect.php";


// variavel da query
$sql = "INSERT INTO usuario (
    nome,
    cpf, 
    email, 
    sexo, 
    telefone, 
    senha, 
    dtnasc,
    id_tipo 
    
    ) VALUES (
        '$nome',
        '$cpf',
        '$email',
        '$sexo',
        '$telefone',
        '$senha',
        '$dtnasc',
        '2'
    )";

// realizar o insert de dados
$result = $conn->query($sql);

//testar se o cadastro foi feito com sucesso
if ($result) {
    session_start();
        $_SESSION['email_session'] = $email;
        $_SESSION['nome_session'] = $nome;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['cpf_session'] = $cpf;
        $_SESSION['dtnasc_session'] = $dtnasc;
        $_SESSION['sexo_session'] = $sexo;
        $_SESSION['telefone_session'] = $telefone;
        $_SESSION['id_session'] = $id;
    header('Location:../view/home.php');

} else {
    echo "Não foi possivel realizar o cadastro";
}

//encerra a conexão com o banco de dados
$conn->close();