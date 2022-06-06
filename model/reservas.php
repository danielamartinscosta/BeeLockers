<?php

session_start();

include_once '../config/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/','-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/','-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_fim));

$query_event = "INSERT INTO eventos (titulo, cor, start, end) VALUES (:titulo, :cor, :start, :end)";

$insert_event = $conn->prepare($query_event);
$insert_event->bindParam(':titulo', $dados['titulo']);
$insert_event->bindParam(':cor', $dados['cor']);
$insert_event->bindParam(':start', $data_start_conv);
$insert_event->bindParam(':end', $data_end_conv);


if ($insert_event->execute()) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Reserva realizada com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Reserva realizada com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro ao reservar!</div>'];
}




header('Content-Type: application/json');
echo json_encode($retorna);
