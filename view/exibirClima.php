<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Emily, Daniela, Geovani e Julyane">
    <meta name="keywords" content="Praia, armário, ">
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
    <title>Bee Lockers</title>
</head>

<body>

    <header>
        <!--Início cabeçalho-->
        <nav class="navbar navbar-expand-sm navbar-light menu_fundo">
            <div class="container-fluid">

                <a href="" class="navbar-brand" alt="Bee Lockes">
                    <img class="logo_img" src="../assets/img/logo.jpeg">
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
                            <a href="login.php" class="nav-link">Entrar</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="bar_laranja"></div>
    </header>
    <!--Fim cabeçalho-->



    <section id="home">
        <!-- Início do home-->
        <div class="container-fluid">
            <div class="row align-items-center ">

                <div class="col-lg-6 d-flex div-home">
                    <div class="align-self-center align-items-center">
                    
                        <h2>Confira qual a cidade ideal para curtir um passeio incrível hoje.</h2>
                        <h1>E faça já sua reserva!</h1>
                    </div>
                </div>

                <!-- início da pesquisa de clima -->
                <div class="col-lg-6 mt-2 div-clima">
                    <div class="card cor-clima shadow-lg">
                        <div class="card-body">
                            <div class="row fw-bolder">

                                <div class="card-header text-center bg-transparent border-success">CLIMA</div>
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
                <<!-- Fim da pesquisa de clima -->

            </div>
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
                <div class="col-md-6">
                    <h4>Bee Lockers</h4>
                    <p>Diversão com segurança</p>
                </div>

            </div>
        </div>
    </footer><!-- Fim do rodapé-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/clima.js"></script>

</body>

</html>