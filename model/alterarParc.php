<?php

//conexão como banco de dados
include "connect.php";

$id_parceria = $_POST['id_parceria'];
$razao_social = $_POST['razao_social'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];


$id_parceria = isset($_POST['id_parceria']) ? $_POST['id_parceria'] : '';



$result = "UPDATE parceria SET 
razao_social = '$razao_social',
email = '$email',
telefone = '$telefone',
cnpj = '$cnpj',
senha = '$senha'
WHERE id_parceria = '$id_parceria'";


$resultado = mysqli_query($conn, $result);

if ($resultado) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
  session_start();
  $_SESSION['razao_social_session'] = $razao_social;
$_SESSION['email_session'] = $email;
$_SESSION['telefone_session'] = $telefone;
$_SESSION['cnpj_session'] = $cnpj;
} else {
  echo "Atualização não realizada <br/><br/>";
}


header('Location:../view/perfilParceria.php');