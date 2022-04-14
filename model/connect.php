<?php

include "../config/config.php";



// criar um objeto de conexão
$conn = new mysqli($hostname, $username, $password, $database);

//testar a conexão
if ($conn->connect_error) {
    die("Erro de conexão");
}

//exibir mensagem para debug
if($flag_exibir){
    echo "<br> Conexão bem sucedida!";
}