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
    <link rel="stylesheet" href="../css/armarios.css">

    <?php
    //testar de o usuário está logado
    //verificar se existe uma sessão aberta no servidor
    /* if (session_status() !== PHP_SESSION_ACTIVE) {
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



    $usuario = implode(" ", $_SESSION);*/
    ?>
    <title>Bee Lockers - Armários</title>
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
                        <!--<li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="perfilUsuario.php" class="nav-link"><?= $usuario ?></a>
                        </li>-->
                        <li class="nav-item">
                            <a href="../model/logoff.php" class="nav-link">Sair</a>
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
                <div class="col-md-2 div-home text-center">
                    <div class="row fw-bolder">
                        <div class="col-md div-home">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container1">
                                        <div class="informacoes">
                                            <h4>Legenda</h4>
                                            <div class="disponivel">Disponível</div>
                                            <div class="ocupado">Ocupado</div>
                                            <div class="selecionado">Selecionado</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal modal info show fade" id="modalInfo">
                    <div class="modal-dialog">
                        <div class="modal-content">

                        </div>
                    </div>
                </div>
                <!-- Sugestão de janela modal para escolha de armario-->
                <div class="container_armarios">

                    <?php

                    include "../model/connect.php";
                    //Seleciona todos os armarios da tabela armarios



                    //executar a query

                    //$selectArmario = $conn->query($sql);


                    //$retornoArmario = $sql->fetch_all(MYSQLI_ASSOC);
                    //$selectArmario = $conn->query("SELECT * FROM armarios");
                    //$retornoArmario = $selectArmario-> fetch_array();
                    //$sql = mysqli_fetch_array();


                    //$sql = "SELECT * FROM armarios";

                    //buscar no banco de dados por meio da query select
                    /*$result = $conn->query("SELECT * FROM armarios");

                    // montar a lista na tabela

                    while ($linha = $result->fetch_array()) { // 

                        //foreach ($retornoArmario as $retorno) :

                        if ($retorno['status_armario'] == 'disponivel') :
                            $statusClass = 'disponivel';
                        elseif ($retorno['status_armario'] == 'ocupado') :
                            $statusClass = 'ocupado';

                            $link = "<a class='link-info' data-number='{$retorno['numero']}' data-toggle='modal' data-target='#modalInfo' href='Ver Info'></a>";
                        endif;

                        if ($statusClass == 'ocupado') :
                            echo "<div class='item_container {$statusClass}' data-number='{$retorno['numero']}'>{$retorno['numero']}'.$link.'</div>";
                        else :
                            echo "<div class='item_container {$statusClass}' data-number='{$retorno['numero']}'>{$retorno['numero']}</div>";

                        endif;

                        //endforeach;
                    }*/
                    ?>

                </div>
                <button id="confirmar">Confirmar Armário </button>
                <button id="limpar">Limpar seleção</button>

                <div class="modal fade" id="modalConfirm">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Confirmar Armário</h4>
                                <button type="button" class="close fechar" data-disniss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="" id="form_confirm">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Nome</label>
                                                // colocar o nome do cliente

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">ID usuario</label>
                                                <input type="text" class="id_usuario" name="id_usuario" value="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" name="status_armario" id="status_armario">
                                                    <option value="ocupado">1- Ocupado</option>
                                                    <option value="disponivel">2- Disponível</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm- numero_armario"></div>


                                    </div>
                                </form>
                            </div>

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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>