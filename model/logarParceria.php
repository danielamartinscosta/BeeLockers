<?php

session_start();
include "../model/connect.php";


/*
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';



if (isset($_POST['email']) && isset($_POST['senha'])) {
    $sql = "SELECT senha, email FROM parceria WHERE email='$email' AND senha='$senha'";

    $result = $conn->query($sql);


    if ($result->num_rows === 1) {
        
        session_start();

        $_SESSION['email'] = $email;

        header("Location: ../view/parceriasUser.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Não foi possível logar, verifique usuário e senha!
      </div>';
    }
}*/


// puxa o email inserido no logar
$email = $_POST['email'];
$senha = $_POST['senha'];

// se o login do banco for igual ao login do formulario e senha igual a senha

$logar = $conn->query("SELECT * FROM parceria WHERE email='$email' AND senha='$senha'");


//verifica o id da tabela com os dados informados
while($linha = mysqli_fetch_array($logar)){
    $nome = $linha['razao_social'];
    $fone = $linha['telefone'];
    $cnpj = $linha['cnpj'];
    $id = $linha['id_parceria'];
}

$sql = "SELECT senha, email FROM parceria WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);



if($result->num_rows === 1) {

    session_start();
    $_SESSION['id_session'] = $id;
    $_SESSION['email_session'] = $email;
    $_SESSION['razao_social_session'] = $nome;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['cnpj_session'] = $cnpj;
    $_SESSION['telefone_session'] = $fone;

    //libera acesso a parceria

    header("location:../view/perfilParceria.php");


}else {
    echo '<div class="alert alert-danger" role="alert">
    Não foi possível logar, verifique usuário e senha!
  </div>';

  
}
?>