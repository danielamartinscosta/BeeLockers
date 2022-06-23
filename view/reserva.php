<?php include("../model/connect.php"); ?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php
    //testar de o usuário está logado
    //verificar se existe uma sessão aberta no servidor
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    //testar se o usuário está logado ou não
    if (isset($_SESSION['email'])) {
    } else {
        // apagar a variável de sessão
        unset($_SESSION['email']);
        echo "Error!!", $_SESSION;
        header("Location: ../index.php");
    }
    $usuario = implode(" ", $_SESSION);
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

    <main id="home">
        <section class="container-fluid">
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
                <!-- Fim do calendário  -->
                <div class="col div-home">
                    <div class="row fw-bolder">
                        <div class="col div-home">
                            <div class="card">
                                <div class="card-header bg-transparent border-warning text-center">
                                    <h2>Tabela de valores</h2>
                                </div>
                                <div class="row card-body">
                                    <div class="col">
                                        <ul>
                                            <ol>1 HORA</ol>
                                            <ol>2 HORAS</ol>
                                            <ol>4 HORAS</ol>
                                            <ol>Demais horas</ol>

                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <ol>R$ 10,00</ol>
                                            <ol>R$ 20,00</ol>
                                            <ol>R$ 25,00</ol>
                                            <ol>R$ 2,00</ol>

                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md">
                                        <ul>
                                            <ol>UTILIZAÇÃO DO CHUVEIRO</ol>
                                        </ul>
                                    </div>
                                    <div class="col-md">
                                        <ul>
                                            <ol>2 MNT R$ 3,00</ol>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col">
                                        <ul>
                                            <ol>ÁGUA</ol>
                                            <ol>CADEADO</ol>
                                        </ul>
                                    </div>
                                    <div class="col">
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
        </section>

        <section class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes da reserva</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="visevent">
                            <dl class="row">
                                <dt class="col-sm-3">ID da reserva</dt>
                                <dd class="col-sm-9" id="id_reserva"></dd>

                                <dt class="col-sm-3">Nome</dt>
                                <dd class="col-sm-9" id="nome"></dd>

                                <dt class="col-sm-3">Praia</dt>
                                <dd class="col-sm-9" id="praia"></dd>

                                <dt class="col-sm-3">Início da reserva</dt>
                                <dd class="col-sm-9" id="start"></dd>

                                <dt class="col-sm-3">Fim da reserva</dt>
                                <dd class="col-sm-9" id="end"></dd>
                            </dl>
                            <button class="btn btn-warning btn-canc-vis">Editar</button>
                        </div>
                        <div class="formedit">
                            <span id="msg-edit"></span>
                            <form id="editevent" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_reserva" id="id_reserva">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="form-label">ID</label>
                                        <input type="text" name="id" id="inputId" class="form-control" value="<?= $id_usuario ?>" readonly="readonly">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Responsável pela reserva" value="<?= $usuario ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Praia</label>
                                    <div class="col-sm-10">
                                        <select name="nome_praia" class="form-control" id="nome_praia">
                                            <?php
                                             $sql = "SELECT * FROM praia ORDER BY '$nome_praia'";
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Início da reserva</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fim da reserva</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="end" class="form-control" id="end" onkeypress="DataHora(event, this)">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>

                                        <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Escolher armário</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cadastrarModalLabel">Reservar horário</h5>
                        <button type="button" class="close warning btn-success" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-reservas"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Responsável pela reserva">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Praia</label>
                                <div class="col-sm-10">
                                    <select name="nome_praia" class="form-control" id="nome_praia">
                                        <?php

                                        $sql = "SELECT * FROM praia ORDER BY '$nome_praia'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($registro = mysqli_fetch_row($res));
                                        echo '<option value="$nome_praia"></option>';

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início da reserva</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fim da reserva</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Escolher armário</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>

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




</body>

</html>