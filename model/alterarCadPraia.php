<?php

//conexão como banco de dados
include "connect.php";

$id_praia = $_POST['id_praia'];
$nome_praia = $_POST['nome_praia'];
$imagem_praia = $_FILES['imagem_praia']['name'];
$rua = $_POST['endereco_praia'];
$numero = $_POST['numero'];
$bairro= $_POST['bairro'];
$cep = $_POST['cep'];


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

$result = "UPDATE praia SET 
nome_praia = '$nome_praia',
imagem_praia = $imagem_praia,
rua = '$rua',
numero = '$numero',
bairro = '$bairro',
cep = '$cep'
WHERE id_praia='$id_praia'";


$result = mysqli_query($conn, $result);

if ($result) {  //para confirmar a alteração ou informar o erro
  echo "Atualização realizada com sucesso!";
} else {
  echo "Atualização não realizada <br/><br/>";
}



//header('Location:../view/exibirPraia.php');