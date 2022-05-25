<?php

//conexão como banco de dados
include "connect.php";

$id_usuario = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$dtnasc = $_POST['dtnasc'];

$id_usuario = isset($_POST['id']) ? $_POST['id'] : '';



$result = "UPDATE usuario SET 
nome = '$nome',
cpf = '$cpf',
email = '$email',
sexo = '$sexo',
telefone = '$telefone',
senha = '$senha',
dtnasc = '$dtnasc'
WHERE id_usuario = '$id_usuario'";


$resultado = mysqli_query($conn, $result);

if ($resultado) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
} else {
  echo "Atualização não realizada <br/><br/>";
}


header('Location:../view/pesquisarUsuario.php');