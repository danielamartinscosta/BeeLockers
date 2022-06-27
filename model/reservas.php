<?php

//session_start();

include_once 'connect.php';


$start = $_POST['start'];
$end = $_POST['end'];
$nome_usuario = $_POST['nome_usuario'];
$id = $_POST['id_usuario'];
$id_praia = $_POST['id_praia'];




$sql = "INSERT INTO reservas (start, end, id_praia, id_usuario) VALUES ('$start','$end', '$id_praia', '$id')";
//var_dump($sql);

if ($conn->query($sql) === TRUE) {
  session_start();
  $_SESSION['start_session'] = $start;
  $_SESSION['end_session'] = $end;




  header("location:../view/perfilUsuario.php");
} else {
    echo "Cadastro não realizado, tente novamente: " . $conn->error;
}

$conn->close();



