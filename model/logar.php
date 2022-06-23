<?php

session_start();
include "../model/connect.php";


/*$email = $_POST['email'];
$senha = $_POST['senha'];

// se o login do banco for igual ao login do formulario e senha igual a senha

$logar = $conn->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");

$login = $conn->query("SELECT * FROM parceria WHERE email='$email' AND senha='$senha'");

while($linha = mysqli_fetch_array($logar)){
    $tipo = $linha['id_tipo'];
    $nome = $linha['nome'];
}

$contagem = mysqli_num_rows($logar) OR ($login);
if($contagem == 1 and $tipo == 1) {
    $_SESSION['email_session'] = $email;
    $_SESSION['nome_session'] = $nome;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['cpf_session'] = $cpf;
    $_SESSION['dtnasc_session'] = $dtnasc;
    $_SESSION['sexo_session'] = $sexo;
    $_SESSION['telefone_session'] = $telefone;

    //libera acesso ao Admin

    header("location:../view/homeAdmin.php");

}elseif ($contagem = 1 and $tipo == 2){
    $_SESSION['email_session'] = $email;
    $_SESSION['nome_session'] = $nome;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['cpf_session'] = $cpf;
    $_SESSION['dtnasc_session'] = $dtnasc;
    $_SESSION['sexo_session'] = $sexo;
    $_SESSION['telefone_session'] = $telefone;
    //$tipo = $linha['id_tipo'];
    //$nome = $linha['nome'];

    //libera acesso ao usuario

    header("location:../view/reserva.php");

*/

// puxa o email inserido no logar
$email = $_POST['email'];
$senha = $_POST['senha'];

// se o login do banco for igual ao login do formulario e senha igual a senha

$logar = $conn->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");


//verifica o id da tabela com os dados informados
while($linha = mysqli_fetch_array($logar)){
    $tipo = $linha['id_tipo'];
    $nome = $linha['nome'];
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
    $_SESSION['telefone_session'] = $telefone;

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

      echo $tipo;
    }

?>
