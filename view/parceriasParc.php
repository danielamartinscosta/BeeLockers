<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de reserva de guarda volumes para você aproveitar seu lazer sem ter que se preocupar com seus bens">
    <meta name="author" content="Geovani, Daniela, Julyane, Emily e Pedro">
    <meta name="keyword" content="Praia, armário, guarda volumes">
    <!-- CSS Reset -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- ícone página -->
    <link rel="shortcut icon" href="../assets/img/iconeBee.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- CSS próprio -->
    <link rel="stylesheet" href="../css/style.css">
    <?php
    //testar de o usuário está logado
    //verificar se existe uma sessão aberta no servidor
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    //testar se o usuário está logado ou não
    if (isset($_SESSION['email_session'])) {
        //echo $_SESSION['email_session'];
    } else {
        // apagar a variável de sessão
        unset($_SESSION['email_session']);
        echo "Erro!!", $_SESSION;
        header("Location: ../index.php");
    }
    $usuario = $_SESSION['razao_social_session'];
    $email = $_SESSION['email_session'];
    ?>

    <title>Bee Lockers - Parcerias</title>
</head>

<body>

    <header>
        <!-- Início Cabeçalho -->
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">

                <a href="home.php" class="navbar-brand">
                    <img src="../assets/img/logo.jpeg" width="120" class="img-fluid">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a href="homeParc.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="agendaParc.php" class="nav-link">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="quemSomosParc.php" class="nav-link">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="exibirClimaParc.php" class="nav-link">Clima</a>
                        </li>
                        <li class="nav-item">
                            <a href="parceriasParc.php" class="nav-link">Parcerias</a>
                        </li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item dropdown col-md-1">
                            <a class="nav-link dropdown-toggle" id="menuPerfil" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-ninja"></i>
                            </a>
                            <ol class="dropdown-menu " aria-labelledby="menuPerfil">
                                <li>
                                    <a class="dropdown-item" href="perfilUsuario.php"><?= $usuario ?></a>
                                </li>
                                <li>
                                    <a class="dropdown-item"  href="../model/logoff.php">Sair</a>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="bar-laranja"></div>
    </header><!-- Fim Cabeçalho -->
    <main>
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid div-home">

                <div class="row">
                    <div class="col-md text-center">
                        <h1>
                            Parcerias <span>Lockers</span>
                        </h1>
                        <p>
                            Falta pouco para você ser um de nossos parceiros e ter acesso ao melhor sistemas de guarda volume. Cadastre-se e aproveite.
                        </p>
                        <p>Tem um quiosque ou um local disponível para locação de armários? Seja um parceiro Bee Lockers e veja os benefícios que podemos te oferecer!</p>
                    </div>
                </div>
            </div>

            <div class="card caixa">
                <div class="card-body">
                    <div class="row fw-bolder justify-content-center">

                        <div class="col-md">
                            <h2 class="text-center">Praia Grande</h2>
                            <!-- Início do Conteúdo das imagens - Carrossel-->

                            <div id="praia" class="carousel slide" data-bs-ride="carousel">
                                <!-- Início Carousel -->
                                <!--Indicadores-->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="2"></button>
                                </div>
                                <!--Indicadores-->
                                <div class="carousel-inner">
                                    <!-- Início Inner -->
                                    <div class="carousel-item active">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/praiaGrande1.jpg" alt="Praia Grande 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/praiaGrande2.png" alt="Praia Grande 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/praiaGrande3.jpg" alt="PraiaGrande 3">
                                    </div>
                                </div><!-- Fim Inner -->
                                <!-- Início Controle -->
                                <a href="#praia" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#praia" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                                <!-- Fim Controle -->
                            </div><!-- Fim Carousel -->
                        </div>
                
                        <div class="col-md">
                            <h2 class="text-center">Localização</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467194.73515147675!2d-46.8786185185235!3d-23.82006162508188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1e637baff3b7%3A0xfc5ad123b1462984!2sQuiosque%207%20ondas!5e0!3m2!1spt-BR!2sbr!4v1653233988716!5m2!1spt-BR!2sbr" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card caixa">
                <div class="card-body">
                    <div class="row fw-bolder justify-content-center">
                        
                        <div class="col-md">
                            <h2 class="text-center">Localização</h2>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.720054259358!2d-45.0656809!3d-23.4705604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd53ef617e0f25%3A0xc714fb13e52d4c1e!2sQuiosque%20Kaiamb%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1653250923622!5m2!1spt-BR!2sbr" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-md">
                            <h2 class="text-center">Ubatuba</h2>
                            <!-- Início do Conteúdo das imagens - Carrossel-->

                            <div id="praia1" class="carousel slide" data-bs-ride="carousel">
                                <!-- Início Carousel -->
                                <!--Indicadores-->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="2"></button>
                                </div>
                                <!--Indicadores-->
                                <div class="carousel-inner">
                                    <!-- Início Inner -->
                                    <div class="carousel-item active">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/ubatuba1.jpg" alt="Ubatuba 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/ubatuba2.jpg" alt="Ubatuba 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/ubatuba3.jpg" alt="Ubatuba 3">
                                    </div>
                                </div><!-- Fim Inner -->
                                <!-- Início Controle -->
                                <a href="#praia" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#praia" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                                <!-- Fim Controle -->
                            </div><!-- Fim Carousel -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="card caixa">
                <div class="card-body">
                    <div class="row fw-bolder justify-content-center">

                        <div class="col-md">
                            <h2 class="text-center">Guarujá</h2>
                            <!-- Início do Conteúdo das imagens - Carrossel-->

                            <div id="praia2" class="carousel slide" data-bs-ride="carousel">
                                <!-- Início Carousel -->
                                <!--Indicadores-->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="2"></button>
                                </div>
                                <!--Indicadores-->
                                <div class="carousel-inner">
                                    <!-- Início Inner -->
                                    <div class="carousel-item active">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/guaruja1.jpg" alt="Guaruja 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/guaruja2.jpg" alt="Guaruja 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/guaruja3.jpg" alt="Guaruja 3">
                                    </div>
                                </div><!-- Fim Inner -->
                                <!-- Início Controle -->
                                <a href="#praia" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#praia" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                                <!-- Fim Controle -->
                            </div><!-- Fim Carousel -->
                        </div>
                
                        <div class="col-md">
                            <h2 class="text-center">Localização</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58318.18439615473!2d-46.27901775113276!3d-23.99978387342581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1ffe83e5e773b%3A0xe03cebe971c44da3!2sQUIOSQUE%20VIRADO%20PRA%20LUA!5e0!3m2!1spt-BR!2sbr!4v1653252241022!5m2!1spt-BR!2sbr" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md text-center text-dark">
                <p><strong> Ficou com alguma dúvida?.</strong></p>
                <P><strong>Entre em contato com a gente</strong></P>
            </div>
            <div class="row div-home justify-content-center">
                <div class="card col-md-6">
                    <div class="card-body ">
                        <div class="col-md text-center">
                            <h2>
                                <nobr>Contato</nobr>
                            </h2>
                        </div>
                        <div class="row justify-content-center">
                            <!-- FOrmulario -->
                            <form class="col-md" method="post" enctype="multipart/form-data">
                                <div class="m-1">
                                    <label for="nome" class="form-label">Nome:</label>
                                    <input type="text" name="nome" id="nome" placeholder="Insira seu nome completo" class="form-control">
                                </div>
                                <div class="m-1">
                                    <label for="email" class="form-label">E-mail:</label>
                                    <input type="email" name="email" id="email" placeholder="Insira seu e-mail" class="form-control">
                                </div>
                                <div class="m-1">
                                    <label for="tel_celular" class="form-label">Tel:</label>
                                    <input type="tel" name="telefone" id="tel_celular" placeholder="(11)-00000-0000" class="form-control">
                                    
                                </div>
                                <div class="m-1">
                                    <label for="assunto" class="form-label">Assunto:</label>
                                    <input type="text" name="assunto" id="assunto" placeholder="" class="form-control">
                                </div>
                                <div>
                                    <label for="msg" class="form-label">Mensagem:</label>
                                    <textarea name="msg" id="msg" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="col text-center">
                                    <button type="submit" class="btn text-white btn-custom" data-bs-toggle='modal' data-bs-target="#modalContato">Enviar</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST["email"]) && !empty($_POST["email"])){

                                    $nome = addslashes($_POST["nome"]);
                                    $email = addslashes($_POST["email"]);
                                    $telefone = addslashes($_POST["telefone"]);
                                    $assunto = addslashes($_POST["assunto"]);
                                    $mensagem = addslashes($_POST["msg"]);

                                    $to = " beelockers@outlook.com";
                                    $subject = "Contato - Bee Lockers | ".$assunto;
                                    $body = "Nome: ".$nome. "\r\n"
                                            ."Email: ".$email. "\r\n"
                                            ."Mensagem: ".$mensagem;
                                    $header = "From:  beelockers@outlook.com"."\r\n"
                                            ."Reply-To:".$email."\e\n"
                                            ."X=Mailer:PHP/".phpversion();

                                    if(mail($to, $subject, $body, $header)){
                                        $html = <<<HTML
                                        <div class="row justify-content-center">
                                            <div class="rounded col-md-6 bg-dark text-light py-2 justify-content-center">
                                                <p class="text-center" >Dados alterados com sucesso! Senha não foi alterada.</h1>
                                            </div>
                                        </div>               
HTML;
                                        echo $html;
                                    }else{
                                        $html = <<<HTML
                                        <div class="row justify-content-center">
                                            <div class="rounded col-md-6 bg-dark text-light py-2 justify-content-center">
                                                <p class="text-center" >Ocorreu um erro ao tentar atualizar os dados.</h1>
                                            </div>
                                        </div>               
HTML;
                                        echo $html;
                                    }
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- Fim do Conteúdo Principal-->

    <footer>
        <!--Início do rodapé-->
        <section class="container-fluid">
            <div class="row text-center">

                <div class="col-md ">
                    <ul>
                        <li class="bordar-icone-rodape">
                            <a href="https://www.facebook.com/profile.php?id=100079971168000" target="_blank" class="btn">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="bordar-icone-rodape">
                            <a href="https://www.instagram.com/" target="_blank" class="btn">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="bordar-icone-rodape">
                            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D" target="_blank" class="btn">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="bordar-icone-rodape">
                            <a href="https://www.youtube.com/" target="_blank" class="btn">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md">
                    <h4>BeeLockers</h4>
                    <ol>
                        <li>
                            <a href="quemSomos.php">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="agenda.php">Agenda</a>
                        </li>
                    </ol>
                </div>
                <div class="col-md">
                    <h4>Para você</h4>
                    <ol>
                        <li>
                            <a href="cadastroUsuario.php">Cadastre-se</a>
                        </li>
                        <li>
                            <a href="home.php">Login</a>
                        </li>
                        <li>
                            <a href="reserva.php">Reserva</a>
                        </li>
                    </ol>
                </div>

                <div class="col-md text-center">
                    <h4>Bee Lockers</h4>
                    <p>Diversão com segurança</p>
                </div>

            </div>
            <div class="bordar-rodape text-center pt-2">
                <p>Copyright &copy; 2022 <strong>BeeLockers</strong> │ Todos os direitos reservados</p>
            </div>
        </section>
    </footer>
    <!--Fim do rodapé-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>