<?php

//conecta ao banco de dados
include "connect.php";

// recuperar dados por get
$id_usuario = $_GET['id_usuario'];


//sql para deletar o registro
$sql = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";



if ($conn->query($sql) === TRUE) {
    $conn->close(); // fechar a conexão
    header('Location:../view/pesquisarUsuario.php');
} else {
    echo "Error ao deletar: " . $conn->error; // se não existir apresenta o erro
}