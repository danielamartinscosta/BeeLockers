<?php

//conexão como banco de dados
include "connect.php";

$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$dtnasc = $_POST['dtnasc'];
$sexo = $_POST['sexo'];

$id = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : '';


$result = "UPDATE usuario SET 
nome = '$nome',
senha = '$senha',
telefone = '$telefone',
dtnasc = '$dtnasc',
sexo = '$sexo'
WHERE id_usuario='$id_usuario'";


$resultado = mysqli_query($conn, $result);

if ($resultado) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
} else {
  echo "Atualização não realizada <br/><br/>";
}


header('Location:../view/pesquisarUsuario.php');