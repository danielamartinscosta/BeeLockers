<?php include("../config/config.php"); ?>
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
    <!-- CSS próprio -->
    <link rel="stylesheet" href="../css/styleAgenda.css">
    <title>Bee Lockers</title>
</head>

<body>

    <header>
        <!--Início cabeçalho-->
        <nav class="navbar navbar-expand-sm navbar-light menu_fundo">
            <div class="container">

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



    <main id="main">
        <!-- Início do main-->
        <div class="container">
            <div class="row  justify-content-around align-items-center">

                <form>

                    <div class="row mb-2 fw-bolder">
                        <div class="col-md-6">
                            <div class="card cor-form">
                                <div class="card-body">

                                    <p>
                                        Somos uma empresa que trabalha com o objetivo de promover lazer e segurança lado a lado.
                                    </p>
                                    <p>
                                        Pensando nisso gostariamos de te oferecer a locação de nossoss armários para você guardar seus
                                        pertences enquanto você se diverte.
                                    </p><br>
                                    <p>Confira ao Lado nossos valores e faça já sua reserva</p>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="card-body text-center">
                                <img src="../assets/img/valores.PNG" alt="">

                            </div>

                        </div>
                    </div>

                </form>


            </div>
        </div>
    </main><!-- Fim do main-->

    <footer>
        <!-- Início do rodapé-->
        <div class="container">
            <div class="row">

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




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>