<?php

session_start();

include_once ("connect.php");


//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/','-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/','-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));
/*
//nova tentativa
// inserir os dados no formulário 
$nome_responsavel = $_POST['nome_responsavel'];
//$praia = $_POST['praia'];
$start = $_POST['start'];
$end = $_POST['end'];

include_once ("connect.php");

// variavel da query
$sqlReserva = "INSERT INTO reservas (
    nome_responsavel,
    start, 
    end

    ) VALUES (
        '$nome_responsavel',
        '$start',
        '$end'
    )";

// realizar o insert de dados na primeira tabela
$result = $conn->query($sqlReserva);



//testar se o cadastro foi feito com sucesso
if ($result) {
    header('Location:../view/reserva.php');

} else {
    echo "Não foi possivel realizar o cadastro";
}

//encerra a conexão com o banco de dados
$conn->close();*/


//tentativa antiga
//$sql = "INSERT INTO reservas (nome_responsavel, praia, start, end) VALUES ($nome_responsavel, $praia, $start, $end)";

$insert_reservas = mysqli_prepare($conn, "INSERT INTO reservas (nome_responsavel, praia, start, end) VALUES ($nome_responsavel, $praia, $start, $end)");
$insert_reservas->bind_param('$nome_responsavel', $dados['nome_responsavel']);
$insert_reservas->bind_param('$praia', $dados['praia']);
$insert_reservas->bind_param('$start', $data_start_conv);
$insert_reservas->bind_param('$end', $data_end_conv);


if ($insert_reservas->execute()) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Reserva realizada com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Reserva realizada com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro ao reservar!</div>'];
}




header('Content-Type: application/json');
echo json_encode($retorna);
