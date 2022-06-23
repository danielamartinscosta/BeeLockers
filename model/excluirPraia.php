<?php

//conecta ao banco de dados
include "connect.php";

// recuperar dados por get
$id_praia = $_GET['id_praia'];


//sql para deletar o registro
$sql = "DELETE FROM praia WHERE id_praia='$id_praia'";

if ($conn->query($sql) === TRUE) {
    $dir = "../assets/imagem_praia/";
    if (is_file('../assets/imagem_praia/' . $imagem_praia)) { //verifica se a imagem existe
    }
    unlink($dir . $imagem_praia); // se existir deleta
    $conn->close(); // fechar a conexão
    header('Location:../view/pesquisarPraias.php');
} else {
    echo "Error ao deletar: " . $conn->error;
}