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
    <title>Bee Lockers - Pesquisar Praias</title>
</head>

<body>

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
    $usuario = $_SESSION['nome_session'];
    $email = $_SESSION['email_session'];
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
                            <a href="reservasTotal.php" class="nav-link">Reservas</a>
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

    <main>
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md text-center div-home">
                        <h1>
                            <nobr></span>Bee <span>Lockers</span></nobr>
                        </h1>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <h2>Visualização de Reservas</h2>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="#">
                            <div class="row">

                                <div class="col-md-6">
                                    <input name="pesq" type="search" class="form-control" id="inputPesq" placeholder="Insira o nome a ser pesquisado" value="<?php echo isset($_POST['pesq']) ? $_POST['pesq'] : "" ?>">
                                </div>

                                <div class="col-md-2">
                                    <button type="submit" class="btn text-white btn-custom">Pesquisar</button>
                                    
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle table-striped table-hover" width="100%">
                                    <!--<table class="table table-striped table-hover">-->
                                    <thead>
                                        <tr class="text-warning">
                                            <th scope="col">ID- Reserva</th>
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Praia</th>
                                            <th scope="col">Início</th>
                                            <th scope="col">Fim</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- incluir o php para montar a lista -->
                                        <?php

                                        include "../model/connect.php";

                                        // receber os dados do search do formulario

                                        $nomePesq = isset($_POST['pesq']) ? $_POST['pesq'] : "";



                                        $sql = "SELECT * FROM reservas WHERE id_usuario LIKE '%$nomePesq%'";

                                        //buscar no banco de dados por meio da query select
                                        $result = $conn->query($sql);

                                        // montar a lista na tabela

                                        while ($linha = $result->fetch_array()) { // mysqli_num or mysqli_assoc
                                            $id_reserva = $linha['id_reserva'];
                                            $id_usuario = $linha['id_usuario'];
                                            $id_praia = $linha['id_praia'];
                                            $start = $linha['start'];
                                            $end = $linha['end'];

                                            //montar a tabela 
                                            $html = <<<HTML
                                    <tr class="text-white">
                                    <td>$id_reserva</td>
                                    <td>$id_usuario</td>
                                    <td>$id_praia</td>
                                    <td>$start</td>
                                    <td>$end</td>
                                    <td>
                                        
HTML;

                                            echo $html;
                                        } // fim do while


                                        // Limpar o objeto result
                                        $result->free_result();


                                        //encerrar conexao
                                        $conn->close();
                                        ?>

                                    </tbody>

                                </table>
                            </div>
                        </form>
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