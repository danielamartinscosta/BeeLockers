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
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
//$id_praia = $_POST['id_praia'];


// salvar imagem
if ($_FILES['imagem_praia']['name']) {
    $dir = "../assets/imagem_praia/";  //diretório para salvar a imagem
    $arr_ext = $_FILES['imagem_praia']['name'];
    $separa = explode(".", $arr_ext);
    $ext = array_reverse($separa);
    $imagem_praia = strtolower($nome_praia . "." . $ext[0]); //converter o nome para minúsculo


    $from = $_FILES['imagem_praia']['tmp_name'];
    $to = $dir . $imagem_praia;
    //echo $to . "<br>";
    if (move_uploaded_file($from, $to)) { //mover o arquivo para o diretório
        //echo "ok";

    } else {
        echo "error";
    }
} else {
    $imagem_praia = null;
}


include "connect.php";

// variavel da query
$sqlPraia = "INSERT INTO praia (
    nome_praia,
    imagem_praia, 
    
    ) VALUES (
        '$nome_praia',
        '$imagem_praia',
    )";

// realizar o insert de dados na primeira tabela
$resultPraia = $conn->query($sqlPraia);

$sqlEndereco = "INSERT INTO endereco_praia (
    rua,
    numero,
    bairro,
    cep,
    id_praia
    
    ) VALUES (
        '$rua',
        '$numero',
        '$bairro',
        '$cep',
        '$id_praia'

    )";

$resultEndereco = $conn->query($sqlEndereco);

// testar se o cadastro foi feito com sucesso
if ($resultPraia && $resultEndereco) {
    echo "cadastro realizado com sucesso!";
} else {
    echo "Cadastro não realizado, tente novamente";
}

//header("location:../view/cadastroPraia.php");
