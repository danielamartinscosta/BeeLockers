<?php

session_start();

include_once 'connect.php';


$start = $_POST['start'];
$end = $_POST['end'];
$id_praia = $_POST['id_praia'];
$nome_usuario = $_POST['nome_usuario'];
$id = $_POST['id_usuario'];
//var_dump($_POST);

//exit();



$sql = "INSERT INTO reservas (start, end, id_praia, id_usuario) VALUES ('$start','$end', '$id_praia', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>
    Reserva realizada com sucesso!
  </div>";
  header("location:../view/perfilUsuario.php");
} else {
    echo "Cadastro não realizado, tente novamente: " . $conn->error;
}

$conn->close();



