<?php

session_start();

include_once 'connect.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/', '-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/', '-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));


$start = $_POST['start'];
$end = $_POST['end'];
$id_praia = $_POST['id_praia'];
$id_usuario = $_POST['id_usuario'];


$sql = "INSERT INTO reservas (start, end, id_praia, id_usuario) VALUES ('$start', '$end', '$id_praia', '$id_usuario')";

$result = $conn->query($sql);
$start = $dados['start'];
$end = $dados['end'];
$id_praia = $dados['id_praia'];
$id_usuario = $dados['id_usuario'];


//$insert_reserva->bindParam(':start', $data_start_conv);
//$insert_reserva->bindParam(':end', $data_end_conv);

if ($result) {
    echo "cadastro realizado com sucesso!";
    header('location:../view/reservas.php');
} else {
    echo "Cadastro não realizado, tente novamente";
}
/*
header('Content-Type: application/json');
echo json_encode($result);*/
/*
if ($stmt->execute()) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro: Evento não foi cadastrado com sucesso!</div>'];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($retorna);*/


/*
//tentativa nova
// inserir os dados no formulário 
$start = $_POST['start'];
$end = $_POST['end'];
$id_usuaio = $_POST['id_usuario'];
$id_praia = $_POST['id_praia'];


include_once ("connect.php");

// variavel da query
$sql = "INSERT INTO reservas (
    start, 
    end,
    id_usuario,
    id_praia

    ) VALUES (
        '$start',
        '$end',
        '$id_usuario',
        $id_praia
    )";

// realizar o insert de dados na primeira tabela
$result = $conn->query($sql);



//testar se o cadastro foi feito com sucesso
if ($result) {
    header('Location:../view/reserva.php');

} else {
    echo "Não foi possivel realizar o cadastro";
}

//encerra a conexão com o banco de dados
$conn->close();

//INSERT INTO `reservas` (`id_reserva`, `start`, `end`, `id_praia`, `id_usuario`) VALUES (NULL, '2022-06-25 12:00:00', '2022-06-25 15:02:00', '5', '2');*/