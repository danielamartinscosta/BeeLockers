<?php

include 'connect.php';

$resultado_reservas = " SELECT * FROM reservas";

$result_reservas= mysqli_query($conn, $resultado_reservas);


if(($result_reservas) AND ($result_reservas->num_rows != 0)){
    while($row_reservas = mysqli_fetch_assoc($result_reservas)) {
       echo $row_reservas['id_reserva'];
        $row_reservas['start'];
        $row_reservas['end'];
        $row_reservas['id_usuario'];
        $row_reservas['id_praia'];

}else {
    echo $id_reserva;
}

//$result = $conn->query($sql);


/*$resultado_reservas = $conn->prepare($query_reservas);
$resultado_reservas->execute();

$reservas = [];*/

//tentativa nova
/*while($row_reservas = mysqli_fetch_assoc($result_reservas)) {
    $row_reservas['id_reserva'];
    $row_reservas['start'];
    $row_reservas['end'];
    $row_reservas['id_usuario'];
    $row_reservas['id_praia'];*/


   /* $id_reserva = $linha['id_reserva'];
    $start = $linha['start'];
    $end = $linha['end'];
    $id_usuario = $linha['id_usuario'];
    $id_praia = $linha['id_praia'];*/


/*
//tentativa antiga
while ($row_reservas = $resultado_reservas->fetch(MYSQLI_ASSOC)) {
    $id_reserva = $row_reservas['id_reserva'];
    $nome_responsavel = $row_reservas['nome_responsavel'];
    $praia = $row_reservas['praia'];
    $start = $row_reservas['start'];
    $end = $row_reservas['end'];


    $reservas[] = [
        'id_reserva' => $id_reserva,
        'start' => $start,
        'end' => $end,
        'id_usuario' => $id_usuario,
        'id_praia' => $id_praia
    ];*/
}

echo json_encode($reservas);


$result = $conn->query($sql);

// montar a lista na tabela

while ($linha = $result->fetch_array()) { // mysqli_num or mysqli_assoc
    $id = $linha['id_usuario'];
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    //formatar a data a ser exibida
    //date = date_create($linha['dtnasc']);
    //$dtnasc = date_format($date, "d/m/Y");
    $dtnasc = $linha['dtnasc'];
    $email = $linha['email'];
    $sexo = $linha['sexo'];
    $telefone = $linha['telefone'];
