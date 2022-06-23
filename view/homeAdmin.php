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
    <title>Bee Lockers - Painel Admin</title>
</head>

<body>
    <?php /*
    //testar de o usuário está logado
    //verificar se existe uma sessão aberta no servidor
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    //testar se o usuário está logado ou não
    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
    } else {
        // apagar a variável de sessão
        unset($_SESSION['email']);
        header("Location: ../index.php");
    }
*/
    ?>

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
                            <a href="homeAdmin.php" class="nav-link">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a href="pesquisarUsuario.php" class="nav-link">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a href="pesquisarPraias.php" class="nav-link">Praias</a>
                        </li>
                        <li class="nav-item">
                            <a href="pesquisarParcerias.php" class="nav-link">Parcerias</a>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="../model/logoff.php" class="nav-link">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bar-laranja"></div>
    </header><!-- Fim Cabeçalho -->
    <div class="clear"></div>
    <main>
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid div-home ">
            <div class="row">
                <div class="col-md text-center">
                    <h1><span>Bem-vindo ao <nobr></span>Bee <span>Lockers</span></nobr></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-center">
                    <h2>Painel <span>Administrativo</span></nobr></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 caixa">
                    <div class="card">
                        <div class="container">
                            <a href="../view/pesquisarUsuario.php"><img class="img-fluid" src="../assets/img/Usuários.png" alt="usuários"></a>
                            <h4 class="text-center">Usuários</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 caixa">
                    <div class="card">
                        <div class="container">
                            <a href="../view/pesquisarParcerias.php"><img class="img-fluid" src="../assets/img/parcerias.png" alt="parcerias"></a>
                            <h4 class="text-center">Parcerias</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 caixa">
                    <div class="card">
                        <div class="container">
                            <a href="../view/pesquisarPraias.php"><img class="img-fluid" src="../assets/img/praia.png" alt="praias"></a>
                            <h4 class="text-center">Praias</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 caixa">
                    <div class="card">
                        <div class="container">
                            <a href="../view/pesquisarPraias.php"><img class="img-fluid" src="../assets/img/reserva.png" alt="reservas"></a>
                            <h4 class="text-center">Reservas</h4>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>