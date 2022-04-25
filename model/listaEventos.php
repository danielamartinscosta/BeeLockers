<?php

include 'connect.php';

$query_eventos=" SELECT id_evento, titulo, cor, comeco, fim FROM eventos";

$resultado_eventos = $conn->prepare($query_eventos);
$resultado_eventos->execute();

$eventos = [];

while($row_eventos = $resultado_eventos->fetch(PDO::FETCH_ASSOC)){
    $id_evento = $row_eventos['id_evento'];
    $titulo = $row_eventos['titulo'];
    $cor = $row_eventos['cor'];
    $comeco = $row_eventos['comeco'];
    $fim = $row_eventos['fim'];

    $eventos[] = [
        'id_evento'=> $id_evento,
        'titulo'=> $titulo,
        'cor'=> $cor,
        'comeco'=> $comeco,
        'fim'=> $fim,
    ];

}

echo json_encode($eventos);