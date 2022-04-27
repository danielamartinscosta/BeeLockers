<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de reserva de guarda volumes para você aproveitar seu lazer sem ter que se preocupar com seus bens">
    <meta name="author" content="Geovani, Daniela, Julyane, Emily e Pedro">
    <meta name="keyword" content="Praia, armário, guarda volumes">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="../css/styleAgendar.css">
    <link rel="stylesheet" href="../css/styleCalendar.css">
    <link href='../css/core/main.min.css' rel='stylesheet' />
    <link href='../css/daygrid/main.min.css' rel='stylesheet' />
    <script src='../js/core/main.min.js'></script>
    <script src='../js/interaction/main.min.js'></script>
    <script src='../js/daygrid/main.min.js'></script>
    <script src='../js/core/locales/pt-br.js'></script>
    <script src="../js/personalizacaoAgenda.js"></script>
    <title>Bee Lockers - Agendar</title>
</head>

<body>

    <header>
        <!-- Início Cabeçalho -->
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">

                <a href="home.php" class="navbar-brand">
                    <img src="../assets/img/logo.jpeg" width="100" class="img-fluid">
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
    <section id="home">
        <div class="container-fluid">
            <!-- Início do calendário  -->
            <div class="row">
                <div class="col-md-7 div-home text-center">
                    <div class="row fw-bolder">
                        <div class="col-md div-home">
                            <div class="card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md div-home">
                    <div class="row fw-bolder">
                        <div class="col div-home">
                            <div class="card mb-3">
                                <div class="card-header bg-transparent border-warning text-center">
                                    <h2>Tabela de valores</h2>
                                </div>
                                <div class="row card-body">
                                    <div class="col-md-7">
                                        <ul>
                                            <ol>1 HORA</ol>
                                            <ol>2 HORAS</ol>
                                            <ol>4 HORAS</ol>
                                            <ol>Demais horas</ol>

                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <ol>R$ 10,00</ol>
                                            <ol>R$ 20,00</ol>
                                            <ol>R$ 27,00</ol>
                                            <ol>R$ 2,00</ol>

                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-7">
                                        <ul>
                                            <ol>UTILIZAÇÃO DO CHUVEIRO</ol>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <ol>2 MNT  R$ 3,00</ol>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-7">
                                        <ul>
                                            <ol>ÁGUA</ol>
                                            <ol>CADEADO - NUMERAÇÃO</ol>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <ol>R$ 3,00</ol>
                                            <ol>GRÁTIS</ol>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fim do calendário  -->
        </div>
        <div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <dl class="row">
                            <dt class="col-sm-3">ID do evento</dt>
                            <dd class="col-sm-9" id="id_evento"></dd>

                            <dt class="col-sm-3">Titulo do evento</dt>
                            <dd class="col-sm-9" id="titulo"></dd>

                            <dt class="col-sm-3">Hora inicial</dt>
                            <dd class="col-sm-9" id="comeco"></dd>

                            <dt class="col-sm-3">Hora final</dt>
                            <dd class="col-sm-9" id="fim"></dd>
                        </dl>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <!--Início do rodapé-->
        <section class="container-fluid">
            <div class="row align-items-center">

                <div class="col-md-6 align-content-center">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100079971168000" target="_blank" class="btn">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank" class="btn">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D" target="_blank" class="btn">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank" class="btn">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <h4>Bee Lockers</h4>
                    <p>Diversão com segurança</p>
                </div>

            </div>
        </section>
    </footer>
    <!--Fim do rodapé-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>