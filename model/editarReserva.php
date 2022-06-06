<?php

session_start();

include_once '../config/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/','-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/','-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_fim));

$query_reservas = "UPDATE reservas SET nome_responsavel=:nome_responsavel, praia=:praia, start=:start, end=:end WHERE id_reserva=:id_reserva";

$update_event = $conn->prepare($query_event);
$update_event->bindParam(':titulo', $dados['titulo']);
$update_event->bindParam(':cor', $dados['cor']);
$update_event->bindParam(':start', $data_start_conv);
$update_event->bindParam(':end', $data_end_conv);
$update_event->bindParam(':id_evento', $dados['id_evento']);

if ($update_event->execute()) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Reserva editada com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Reserva editada com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro ao editar!</div>'];
}




header('Content-Type: application/json');
echo json_encode($retorna);
