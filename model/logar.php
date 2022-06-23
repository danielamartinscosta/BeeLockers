<?php

include "../model/connect.php";


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