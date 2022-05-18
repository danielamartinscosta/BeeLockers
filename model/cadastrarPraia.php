<?php
/* mysql describe praia
+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| id_praia     | int(11)      | NO   | PRI | NULL    | auto_increment |
| nome_praia   | varchar(255) | YES  |     | NULL    |                |
| imagem_praia | varchar(255) | YES  |     | NULL    |                |
+--------------+--------------+------+-----+---------+----------------+

mysql describe endereco_praia
+-------------+-------------+------+-----+---------+----------------+
| Field       | Type        | Null | Key | Default | Extra          |
+-------------+-------------+------+-----+---------+----------------+
| id_endereço | int(11)     | NO   | PRI | NULL    | auto_increment |
| numero      | varchar(20) | NO   |     | NULL    |                |
| rua         | varchar(50) | NO   |     | NULL    |                |
| bairro      | varchar(50) | NO   |     | NULL    |                |
| cep         | varchar(8)  | NO   |     | NULL    |                |
| id_praia    | int(11)     | YES  | MUL | NULL    |                |
+-------------+-------------+------+-----+---------+----------------+
*/

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