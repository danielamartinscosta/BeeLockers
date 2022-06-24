<?php

    if(isset($_POST["email"]) && !empty($_POST["email"])){

        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $telefone = addslashes($_POST["telefone"]);
        $assunto = addslashes($_POST["assunto"]);
        $mensagem = addslashes($_POST["msg"]);

        $to = "geovani.f.pereira98@gmail.com";
        $subject = "Contato - Bee Lockers | ".$assunto;
        $body = "Nome: ".$nome. "\r\n"
                ."Email: ".$email. "\r\n"
                ."Mensagem: ".$mensagem;
        $header = "From: geovani.f.pereira@gmail.com"."\r\n"
                ."Reply-To:".$email."\e\n"
                ."X=Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)){
            echo("Email enviado com sucesso!");
        }else{
            echo("Houve erro");
        }
    }

?>