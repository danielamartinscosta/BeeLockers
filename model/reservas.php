<?php

session_start();

include_once 'connect.php';


//opção 1
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/', '-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/', '-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

/*
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

echo $sql;
//$insert_reserva->bindParam(':start', $data_start_conv);
//$insert_reserva->bind_param(':end', $data_end_conv);

if ($result) {
    echo "cadastro realizado com sucesso!";
    header('location:../view/reservas.php');
} else {
    echo "Cadastro não realizado, tente novamente";
}
/*
header('Content-Type: application/json');*/
//echo json_encode($result);


//INSERT INTO `reservas` (`id_reserva`, `start`, `end`, `id_praia`, `id_usuario`) VALUES (NULL, '2022-06-25 12:00:00', '2022-06-25 15:02:00', '5', '2');*/

/*
//opção 2
if(isset($_POST["start"]))
{
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id_praia = $_POST['id_praia'];
    $id_usuario = $_POST['id_usuario'];
    $sql = "INSERT INTO reservas (id_reservas,start, end, id_praia, id_usuario) VALUES (NULL, '$start','$end', '$id_praia', '$id_usuario')"; 
    $conn->query($sql); 
}

echo $sql;*/


//opção 3


    $start = $data_start_conv = $_POST['start'];
    $end = $_POST['end'];
    $id_praia = $_POST['id_praia'];
    $id_usuario = $_POST['id_usuario']; 


$sql = "INSERT INTO reservas (start, end, id_praia, id_usuario) VALUES ('$start','$end','$id_praia', '$id_usuario')";

if($conn->query($sql) === TRUE){
    echo "cadastro realizado com sucesso!";
}else {
    echo "Cadastro não realizado, tente novamente: " . $conn->error;
}

$conn->close();


echo $sql;