<?php
/* mysql> desc praia;
+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| id_praia     | int(11)      | NO   | PRI | NULL    | auto_increment |
| nome_praia   | varchar(255) | YES  |     | NULL    |                |
| imagem_praia | varchar(255) | YES  |     | NULL    |                |
| rua          | varchar(50)  | NO   |     | NULL    |                |
| numero       | varchar(20)  | NO   |     | NULL    |                |
| bairro       | varchar(50)  | NO   |     | NULL    |                |
| cep          | varchar(8)   | NO   |     | NULL    |                |
+--------------+--------------+------+-----+---------+----------------+
*/

// inserir os dados no formulário 
$nome_praia = $_POST['nome_praia'];
$imagem_praia = $_FILES['imagem_praia']['name'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];


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
$sql = "INSERT INTO praia (
    nome_praia,
    imagem_praia,
    rua,
    numero,
    bairro,
    cep
    
    ) VALUES (
        '$nome_praia',
        '$imagem_praia',
        '$rua',
        '$numero',
        '$bairro',
        '$cep'
    )";

// realizar o insert de dados na primeira tabela
$result = $conn->query($sql);



// testar se o cadastro foi feito com sucesso
if ($result) {
    echo "cadastro realizado com sucesso!";
    header('location:../view/homeParceria.php');
} else {
    echo "Cadastro não realizado, tente novamente";
}
//header("location:../view/cadastroPraia.php");
