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
    <link rel="stylesheet" href="../css/styleClima.css">
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

    <main>
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md div-home text-center">
                        <h1>
                            <nobr>Bee <span>Lockers</span></nobr>
                        </h1>
                        <p>
                            Confira qual a cidade ideal para curtir um passeio incrível ainda hoje.
                        </p>
                        <p>
                            Se você já é cadastrado, <a href="home.php">Clique aqui</a> para fazer login e faça já a sua reserva!
                        </p>
                    </div>
                </div>

                <!-- início da pesquisa de clima -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 mt-2 div-clima">
                        <div class="card cor-clima shadow-lg">
                            <div class="card-body">
                                <div class="row fw-bolder">

                                    <div class="card-header text-center bg-transparent border-success">
                                        <h2>Consulta de Clima</h2>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="city">Cidade</div>
                                        <div class="date">Domingo, 30 Novembro 2022</div>
                                        <div class="container-img">
                                            <img src="../assets/img/unknown.png" alt="imagem-clima">
                                        </div>
                                        <div class="container-temp">
                                            <div>22</div>
                                            <span>°C</span>
                                        </div>
                                        <div class="weather">Nublado</div>
                                        <div class="low-high"> Mínima de: 22°C /Máxima de: 23°C</div>
                                    </div>
                                    <div class="card-footer text-center bg-transparent border-success">
                                        <div class="input-group">
                                            <input type="text" class="form-control shadow-lg " placeholder="Digite o nome da Cidade" aria-label="digite o nome da Cidade" aria-describedby="button-addon2">
                                            <button class="btn btn-success text-white" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <<!-- Fim da pesquisa de clima -->
            </div>
        </section><!-- Fim do Home-->

        <footer>
            <!-- Início do rodapé-->
            <div class="container-fluid">
                <div class="row align-self-center">

                    <div class="col-md-6">
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
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <h4>BeeLockers</h4>
                            <ul id="indice">
                                <ol>
                                    <a href="quemSomos.php">Sobre Nós</a>
                                </ol>
                                <ol>
                                    <a href="home.php">Home</a>
                                </ol>
                                <ol>
                                    <a href="agenda.php">Agenda</a>
                                </ol>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h4>Para você</h4>
                            <ul>
                                <ol>
                                    <a href="cadastroUsuario.php">Cadastre-se</a>
                                </ol>
                                <ol>
                                    <a href="home.php">Login</a>
                                </ol>
                                <ol>
                                    <a href="reserva.php">Reserva</a>
                                </ol>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="text-center pt-2">
            <p>Copyright &copy; 2022 <strong>BeeLockers</strong> │ Todos os direitos reservados</p>
        </div>
        <!-- Fim do rodapé-->




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../js/clima.js"></script>

</body>

</html>