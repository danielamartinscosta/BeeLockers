<?php

//conexão como banco de dados
include "connect.php";

$id_usuario = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$dtnasc = $_POST['dtnasc'];

$id_usuario = isset($_POST['id']) ? $_POST['id'] : '';



$result = "UPDATE usuario SET 
nome = '$nome',
cpf = '$cpf',
email = '$email',
sexo = '$sexo',
telefone = '$telefone',
dtnasc = '$dtnasc'
WHERE id_usuario = '$id_usuario'";


$resultado = mysqli_query($conn, $result);

if ($resultado) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
  session_start();
$_SESSION['email_session'] = $email;
$_SESSION['nome_session'] = $nome;
$_SESSION['cpf_session'] = $cpf;
$_SESSION['dtnasc_session'] = $dtnasc;
$_SESSION['sexo_session'] = $sexo;
$_SESSION['telefone_session'] = $telefone;
//var_dump($_SESSION);
//exit();

       
} else {
  echo "Atualização não realizada <br/><br/>";
}



header('Location:../view/perfilUsuario.php');