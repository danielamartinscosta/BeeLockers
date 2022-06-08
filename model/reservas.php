<?php

session_start();

include_once '../config/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/','-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/','-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

$query_reservas = "INSERT INTO reservas (nome_responsavel, praia, start, end) VALUES (:nome_responsavel, :praia, :start, :end)";

$insert_reservas = $conn->prepare($query_reservas);
$insert_reservas->bindParam(':nome_responsavel', $dados['nome_responsavel']);
$insert_reservas->bindParam(':praia', $dados['praia']);
$insert_reservas->bindParam(':start', $data_start_conv);
$insert_reservas->bindParam(':end', $data_end_conv);


if ($insert_reservas->execute()) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Reserva realizada com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Reserva realizada com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro ao reservar!</div>'];
}




header('Content-Type: application/json');
echo json_encode($retorna);
