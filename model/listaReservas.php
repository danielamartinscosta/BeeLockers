<?php

include 'connect.php';

$query_reservas=" SELECT id_reserva, nome_responsavel, praia, start, end FROM reservas";

$resultado_reservas = $conn->prepare($query_reservas);
$resultado_reservas->execute();

$reservas = [];

while($row_reservas = $resultado_reservas->fetch(PDO::FETCH_ASSOC)){
    $id_reserva = $row_reservas['id_reserva'];
    $nome_responsavel = $row_reservas['nome_responsavel'];
    $praia = $row_reservas['praia'];
    $start = $row_reservas['start'];
    $end = $row_reservas['end'];

    $reservas[] = [
        'id_reserva'=> $id_reserva,
        'nome_responsavel'=> $nome_responsavel,
        'praia'=> $praia,
        'start'=> $start,
        'end'=> $end,
    ];

}

echo json_encode($reservas);