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



<?php 
    //testar de o usuário está logado
    //verificar se existe uma sessão aberta no servidor
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    //testar se o usuário está logado ou não
    if (isset($_SESSION['email'])) {
        //echo $_SESSION['email'];
    } else {
        // apagar a variável de sessão
        unset($_SESSION['email']);
        echo "Deu ruim!!", $_SESSION;
        header("Location: ../index.php");
    }
    $usuario= implode(" ",$_SESSION);
?>
    <title>Bee Lockers - Reservar</title>
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
                        <li class="nav-item">
                            <a href="parcerias.php" class="nav-link">Parcerias</a>
                        </li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="perfilUsuario.php" class="nav-link"><?=$usuario?></a>
                        </li>
                        <li class="nav-item">
                            <a href="../model/logoff.php" class="nav-link">Sair</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>