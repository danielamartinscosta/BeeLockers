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
    <link rel="stylesheet" href="../css/styleAgendar.css">
    <title>Bee Lockers - Agenda</title>
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
                            <a href="homeUser.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="agendaUser.php" class="nav-link">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="quemSomosUser.php" class="nav-link">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="exibirClimaUser.php" class="nav-link">Clima</a>
                        </li>
                        <li class="nav-item">
                            <a href="parceriasUser.php" class="nav-link">Parcerias</a>
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
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md div-home text-center">
                        <h1>
                            <nobr>Bee <span>Lockers</span></nobr>
                        </h1>
                        <p>
                            Falta pouco para você ter acesso ao melhor sistemas de guarda volume. Cadastre-se e aproveite.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-10 caixa">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    Somos uma empresa que trabalha com o objetivo de promover lazer e segurança lado a lado
                                </p>
                                <p>
                                    Pensando nisso gostariamos de te oferecer a locação de nossoss armários para você guardar seus 
                                    pertences enquanto você se diverti.
                                </p>

                                <p>
                                    Com apenas alguns cliques, acesse nossa agenda e reserve um lugar seguro para deixar seus itens pessoais. Viaje e descubra que dá para curtir uma praia sem preocupações.
                                    Nunca foi tão fácil agendar! 
                                </p>
                                
                                <p>
                                    E ai? Qual é a sua praia? Clique em agendar e Confira qual o melhor destino para você!
                                </p>

                                <a href="reserva.php" class="btn text-white btn-custom">Agendar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fw-bolder justify-content-center">
                    <!-- Início do Conteúdo das imagens - Carrossel-->
                    <div class="col-md-10">

                            <div id="praia" class="carousel slide" data-bs-ride="carousel"><!-- Início Carousel -->

                                <!--Indicadores-->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="2"></button>
                                    <button type="button" data-bs-target="#praia" data-bs-slide-to="3"></button>
                                </div>
                                <!--Indicadores-->

                                <div class="carousel-inner"><!-- Início Inner -->

                                    <div class="carousel-item active">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/guaruja.png" alt="Guaruja">

                                        <div class="carousel-caption">
                                            <h3>Praia de Guaruja</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/itarare.jpg" alt="itarare">

                                        <div class="carousel-caption">
                                            <h3>Praia de Itarare</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/praia_grande.jpg" alt="PraiaGrande">

                                        <div width="100%" class="carousel-caption">
                                            <h3>Praia Grande</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" class="d-block img-fluid" src="../assets/imagem_praia/ubatuba.jpg" alt="Ubatuba">
                                        <div class="carousel-caption">
                                            <h3>Praia de Ubatuba</h3>
                                        </div>
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
                                <script>$('.carousel').slick({
                                        dots: true,
                                        infinite: true,
                                        speed: 999,
                                        slidesToShow: 4,
                                        slidesToScroll: 4,
                                        });
                                </script>

                            </div><!-- Fim Carousel -->
                    </div>
                    <!-- Fim do Conteúdo das imagens - Carrossel-->
                </div>

            </div>
        </section>
    </main><!-- Fim do Conteúdo Principal-->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>