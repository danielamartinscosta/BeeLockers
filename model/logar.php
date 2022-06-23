<?php

session_start();
include "../model/connect.php";


$email = $_POST['email'];
$senha = $_POST['senha'];

// se o login do banco for igual ao login do formulario e senha igual a senha

$logar = $conn->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");

while($linha = mysqli_fetch_array($logar)){
    $tipo = $linha['id_tipo'];
    
}


$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';


if (isset($_POST['email']) && isset($_POST['senha'])) {
    $sql = "SELECT senha, email FROM usuario WHERE email='$email' AND senha='$senha'";

    $result = $conn->query($sql);


    if ($result->num_rows === 1) {
        
        session_start();

        $_SESSION['email'] = $email;

        header("Location: ../view/agendaUser.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Não foi possível logar, verifique usuário e senha!
      </div>';
    }
}
?>