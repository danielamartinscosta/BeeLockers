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
    <title>Bee Lockers - Home</title>
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
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="agenda.php" class="nav-link">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="quemSomos.php" class="nav-link">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="exibirClima.php" class="nav-link">Clima</a>
                        </li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="cadastroUsuario.php" class="nav-link">Inscrever-se</a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Entrar</a>
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
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md text-center">
                        <h1>
                            <nobr>Bee <span>Lockers</span></nobr>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 div-home">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Somos uma empresa brasileira que trabalha com o objetivo de promover lazer e segurança lado a lado. Nascemos da ideia de tornar o lazer, um momento inesquecível e sem preocupações.
                            </p>
                            <p>Desde 2022 atuando no desenvolvimento de soluções tecnológicas para sistema de agendamento, voltado para o setor de entretenimento - cultura de lazer. </p>
                            <p>
                                A BeeLockers é pioneira e líder em sistema de agendamento para locação de armários nas praias do litoral brasileiro. Possui um completo conjunto de soluções que atendem as necessidades de agendamento, com praticidade e otimização de tempo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row fw-bolder justify-content-center">
                <div class="col-md-4 div-home">
                    <div class="card">
                        <div class="card-body">
                        <h2 class="text-center">O motivo de existimos?</h2>
                        <p>
                            A Bee Lockers nasceu com objetivo de facilida e tirar a tirar a preocupação durante seus momentos de lazer.
                            Pensando nisso criamos um sistemas de guarda-volume para praia, aonde você pode ir em uma empresa parceira e 
                            deixar seus pertences sobre nossos cuidados durante o tempo que você precisar.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 div-home">
                    <div class="card">
                        <div class="card-body">
                        <h2 class="text-center">Como surgiu a ideia do Bee Lockers?</h2>
                        <p>
                            A Bee Lockers nasceu com objetivo de facilida e tirar a tirar a preocupação durante seus momentos de lazer.
                            Pensando nisso criamos um sistemas de guarda-volume para praia, aonde você pode ir em uma empresa parceira e 
                            deixar seus pertences sobre nossos cuidados durante o tempo que você precisar.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- Fim do Conteúdo Principal-->
    <!--/Início seção Missão, Visão e Valores -->
    <section class="caixa">

        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-3">
                    <img src="../assets/img/missao.png" class="img-fluid">
                    <h4>Missão</h4>
                    <p>
                        Garantir excelência em nossos serviços oferecidos, trazendo a oportunidade de nossos clientes se divertirem, tendo seus objetos guardados em segurança, nosso principal foco é a prevenção de percas.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/visao.png" class="img-fluid justify-content-center">
                    <h4>Visão</h4>
                    <p>
                        Estar entre as principais empresas que influenciam projetos que levam a sustentabilidade global auxiliando na perda de objetos em áreas litorâneas.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/valores.png" class="img-fluid">
                    <h4>Valores</h4>
                    <p>
                        Nosso principal valor é a ética nas relações. Visamos ter responsabilidade nas ações e compromissos com nossos clientes, trabalhando sempre com transparência, inovação, tecnologia, sustentabilidade e qualidade em atendimento.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--/FIM seção Missão, Visão e Valores -->
    <main>
        <!-- Início da seção Contato-->
        <section id="home">
            <div class="row justify-content-center">
                <div class="col-md-6 div-home">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md">
                                <h2 class="text-center">Contato</h2>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.399832915192!2d-46.7685394850196!3d-23.69741168461548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5212f9627de5%3A0x1c5ccd29c1a3e96a!2sEtec%20Jardim%20%C3%82ngela!5e0!3m2!1spt-BR!2sbr!4v1621474060887!5m2!1spt-BR!2sbr" width="100%" height="370" allowfullscreen="" loading="lazy"></iframe>
                                <p>
                                    <span class="fw-bold">Endereço:</span> Estrada da Baronesa, 1695 - Jardim Nakamura - São Paulo
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            <span class="fw-bold">CEP:</span> 04941-175
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <span class="fw-bold">Tel:</span>(11)5833-0861
                                        </p>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 div-home">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md text-center">
                                <h2>
                                    <nobr>Dúvidas?</nobr>
                                </h2>
                            </div>
                            <div class="flex-container">
                                <div class="col">
                                    <!-- FOrmulario -->
                                    <form>
                                        <div class="m-1">
                                            <label for="nome" class="form-label"><strong>Nome:</strong></label>
                                            <input type="email" name="nome" id="nome" placeholder="Insira seu nome completo" class="form-control">
                                        </div>
                                        <div class="m-1">
                                            <label for="email" class="form-label"><strong>E-mail:</strong></label>
                                            <input type="email" name="email" id="email" placeholder="Insira seu e-mail" class="form-control">
                                        </div>
                                        <div class="m-1">
                                            <label for="Tel" class="form-label col-md-12">
                                                <strong>Tel:</strong>
                                                <input type="tel" id="tel" placeholder="(11)-00000-0000" class="form-control">
                                            </label>
                                        </div>
                                        <div>
                                            <label for="Assunto" class="form-label col-md-12">
                                                <strong>Assunto:</strong>
                                                <input type="text" id="assunto" placeholder="Insira aqui o assunto da mensagem" class="form-control">
                                            </label>
                                        </div>
                                        <div>
                                            <label for="msg" class="form-label col-md-12">
                                                <strong>Mensagem:</strong>
                                                <textarea name="msg" id="msg" rows="5" class="form-control"></textarea>
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <button type="submit" class="btn text-white btn-custom">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- Fim da seção contato-->

    <footer><!--Início do rodapé-->
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
    </footer><!--Fim do rodapé-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>