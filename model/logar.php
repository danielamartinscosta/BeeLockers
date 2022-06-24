<?php

session_start();
include "../model/connect.php";




// puxa o email inserido no logar
$email = $_POST['email'];
$senha = $_POST['senha'];

// se o login do banco for igual ao login do formulario e senha igual a senha

$logar = $conn->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");


//verifica o id da tabela com os dados informados
while($linha = mysqli_fetch_array($logar)){
    $tipo = $linha['id_tipo'];
    $nome = $linha['nome'];
    $fone = $linha['telefone'];
}

$sql = "SELECT senha, email FROM usuario WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);



if($result->num_rows === 1 and $tipo == 1) {

    session_start();
    $_SESSION['email_session'] = $email;
    $_SESSION['nome_session'] = $nome;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['cpf_session'] = $cpf;
    $_SESSION['dtnasc_session'] = $dtnasc;
    $_SESSION['sexo_session'] = $sexo;
    $_SESSION['telefone_session'] = $fone;

    //libera acesso ao Admin

    header("location:../view/homeAdmin.php");


}else if($result->num_rows === 1 and $tipo == 2) {

        session_start();
        $_SESSION['email_session'] = $email;
        $_SESSION['nome_session'] = $nome;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['cpf_session'] = $cpf;
        $_SESSION['dtnasc_session'] = $dtnasc;
        $_SESSION['sexo_session'] = $sexo;
        $_SESSION['telefone_session'] = $telefone;
    
        //libera acesso ao user
    
        header("location:../view/perfilUsuario.php");


} else {
        echo '<div class="alert alert-danger" role="alert">
        Não foi possível logar, verifique usuário e senha!
      </div>';

      
    }

?>
