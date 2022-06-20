<?php

include 'connect.php';

$query_reservas = " SELECT id_reserva, nome_responsavel, start, end FROM reservas";

$resultado_reservas = $conn->prepare($query_reservas);
$resultado_reservas->execute();

$reservas = [];

//tentativa nova
while($linha = $result->fetch_array()) {
    $id_reserva = $linha['id_reserva'];
    $nome_responsavel = $linha['nome_responsavel'];
    $start = $linha['start'];
    $end = $linha['end'];



//tentativa antiga
/*while ($row_reservas = $resultado_reservas->fetch(PDO::FETCH_ASSOC)) {
    $id_reserva = $row_reservas['id_reserva'];
    $nome_responsavel = $row_reservas['nome_responsavel'];
    $praia = $row_reservas['praia'];
    $start = $row_reservas['start'];
    $end = $row_reservas['end'];*/


    $reservas[] = [
        'id_reserva' => $id_reserva,
        'nome_responsavel' => $nome_responsavel,
        'praia' => $praia,
        'start' => $start,
        'end' => $end,
    ];
}

echo json_encode($reservas);
