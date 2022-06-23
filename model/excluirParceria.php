<?php

//conecta ao banco de dados
include "connect.php";

// recuperar dados por get
$id_parceria = $_GET['id_parceria'];


//sql para deletar o registro
$sql = "DELETE FROM parceria WHERE id_parceria='$id_parceria'";



if ($conn->query($sql) === TRUE) {
    $conn->close(); // fechar a conexão
    header('Location:../view/pesquisarParcerias.php');
} else {
    echo "Error ao deletar: " . $conn->error; // se não existir apresenta o erro
}