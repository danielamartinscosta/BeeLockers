<?php

//conexão como banco de dados
include "connect.php";

$id_praia = $_POST['id_usuario'];
$nome_praia = $_POST['nome_praia'];
$nome_responsavel = $_POST['nome_responsavel'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$imagem_praia = $_POST['imagem_praia'];


$dir = '../assets/imagem_praia';
$id = isset($_POST['id_praia']) ? $_POST['id_praia'] : '';

if ($_FILES['imagem_praia']['name']) {
  if (is_file('../assets/imagem_praia/' . $imagem_praia)) { //verifica se a imagem existe
  }
  unlink($dir . $imagem_praia);
  $dir = "../assets/imagem_praia/";  //diretório para salvar a imagem
  $arr_ext = $_FILES['imagem_praia']['name'];
  $separa = explode(".", $arr_ext);
  $ext = array_reverse($separa);
  $avatar = strtolower($email . "." . $ext[0]); //converter o nome para minúsculo


  $from = $_FILES['imagem_praia']['tmp_name'];
  $to = $dir . $imagem_praia;
  echo $to . "<br>";
  if (move_uploaded_file($from, $to)) { //mover o arquivo para o diretório
    //echo "ok";

  } else {
    echo "error";
  }
} else {
  $imagem_praia = null;
}

$result = "UPDATE usuario SET 
nome_praia = '$nome_praia',
nome_responsavel = '$nome_responsavel',
senha = '$senha',
telefone = '$telefone',
imagem_praia = $imagem_praia
WHERE id_praia='$id_praia'";


$resultado = mysqli_query($conn, $result);

if ($resultado) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
} else {
  echo "Atualização não realizada <br/><br/>";
}



header('Location:../view/exibirPraia.php');