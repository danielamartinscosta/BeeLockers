<?php

/*
mysql> describe usuario;
+------------+--------------+------+-----+-------------------+----------------+
| Field      | Type         | Null | Key | Default           | Extra          |
+------------+--------------+------+-----+-------------------+----------------+
| id_usuario | int(11)      | NO   | PRI | NULL              | auto_increment |
| nome       | varchar(255) | YES  |     | NULL              |                |
| cpf        | varchar(11)  | YES  |     | NULL              |                |
| email      | varchar(255) | YES  | UNI | NULL              |                |
| sexo       | varchar(10)  | YES  |     | NULL              |                |
| telefone   | varchar(25)  | YES  |     | NULL              |                |
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
    echo "<div class='row g-3 pt-3'>
    <div class='col-md'></div>
        <div class='col-md'>
            <div class='alert alert-success'role='alert'>
            Cadastro realizado com sucesso.
            </div>
        </div>
    <div class='col-md'></div>
    </div>";
} else {
    echo "<div class='row g-3 pt-3'>
    <div class='col-md'></div>
        <div class='col-md'>
            <div class='alert alert-danger'role='alert'>
            Cadastro não realizado. Verifique os dados e tente novamente.
            </div>
        </div>
    <div class='col-md'></div>
    </div>";
}

echo "$result";

header("location:../view/cadastroUsuario.php");