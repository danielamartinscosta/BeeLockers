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
    <title>Bee Lockers - Pesquisar Usuário</title>
</head>

<body>

    <!--
mysql> describe usuario;
+------------+--------------+------+-----+-------------------+----------------+
| Field      | Type         | Null | Key | Default           | Extra          |
+------------+--------------+------+-----+-------------------+----------------+
| id_usuario | int(11)      | NO   | PRI | NULL              | auto_increment |
| nome       | varchar(255) | YES  |     | NULL              |                |
| cpf        | varchar(11)  | YES  |     | NULL              |                |
| email      | varchar(255) | YES  | UNI | NULL              |                |
| sexo       | varchar(10)  | YES  |     | NULL              |                |
| telefone   | varchar(25)  | YES  |     | NULL              |                |
| senha      | varchar(255) | YES  |     | NULL              |                |
| dtnasc     | varchar(25)  | YES  |     | NULL              |                |
| id_praia   | int(11)      | YES  | MUL | NULL              |                |
| id_tipo    | int(11)      | YES  |     | NULL              |                |
| data       | timestamp    | YES  |     | CURRENT_TIMESTAMP |                |
+------------+--------------+------+-----+-------------------+----------------+
-->

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
                    <div class="col-md text-center">
                        <h1>
                            <nobr></span>Bee <span>Lockers</span></nobr>
                        </h1>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <h2>Administração de Usuários</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="#">
                            <div class="row">

                                <div class="col-md-6">
                                    <input name="inputPesq" type="search" class="form-control" id="inputPesq" placeholder="Insira o nome a ser pesquisado" value="<?php echo isset($_POST['pesq']) ? $_POST['pesq'] : "" ?>">
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
                                            <th scope="col">ID</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col">CPF</th>
                                            <th scope="col">NASCIMENTO</th>
                                            <th scope="col">E-MAIL</th>
                                            <th scope="col">SEXO</th>
                                            <th scope="col">TELEFONE</th>
                                            <th scope="col">AÇÃO</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- incluir o php para montar a lista -->
                                        <?php

                                        include "../model/connect.php";

                                        // receber os dados do search do formulario

                                        $nomePesq = isset($_POST['pesq']) ? $_POST['pesq'] : "";



                                        $sql = "SELECT * FROM usuario WHERE nome LIKE '%$nomePesq%'";

                                        //buscar no banco de dados por meio da query select
                                        $result = $conn->query($sql);

                                        // montar a lista na tabela

                                        while ($linha = $result->fetch_array()) { // mysqli_num or mysqli_assoc
                                            $id = $linha['id_usuario'];
                                            $nome = $linha['nome'];
                                            $cpf = $linha['cpf'];
                                            //formatar a data a ser exibida
                                            //$dtnasc = $linha['dtnasc'];
                                            $date = date_create($linha['dtnasc']);
                                            $dtnasc = date_format($date, "d/m/Y");
                                            $email = $linha['email'];
                                            $sexo = $linha['sexo'];
                                            $telefone = $linha['telefone'];

                                            //montar a tabela 
                                            $html = <<<HTML
                                    <tr class="text-white">
                                    <td>$id</td>
                                    <td>$nome</td>
                                    <td>$cpf</td>
                                    <td>$dtnasc</td>
                                    <td>$email</td>
                                    <td>$sexo</td>
                                    <td>$telefone</td>
                                    <td>
                                        <a href="alterarUsuario.php?id_usuario=$id" class="text-decoration-none me-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" 
                                            viewBox="0 0 504.914 504.914" style="enable-background:new 0 0 504.914 504.914;" xml:space="preserve">
                                        <g transform="translate(1)">
                                            <polygon style="fill:#E2E3E5;" points="144.371,462.4 8.143,494.4 41.057,359.086 370.2,29.029 474.429,132.343 	"/>
                                            <path style="fill:#F0F0F0;" d="M474.429,29.029c-29.257-28.343-74.971-28.343-104.229,0l103.314,103.314
                                                C502.771,104,502.771,57.371,474.429,29.029"/>
                                            <path style="fill:#CCCCCC;" d="M142.543,462.4L142.543,462.4l6.4-58.514l-58.514,6.4l6.4-58.514c0,0-50.286,5.486-54.857,6.4l0,0
                                                L8.143,494.4L142.543,462.4z"/>
                                            <g>
                                                <path style="fill:#B6B6B6;" d="M8.143,503.543c-2.743,0-4.571-0.914-6.4-2.743S-1,495.314-1,492.571l32-136.229
                                                    c0-1.829,0.914-2.743,2.743-4.571L363.8,22.629c1.829-1.829,3.657-2.743,6.4-2.743l0,0c2.743,0,4.571,0.914,6.4,2.743
                                                    l103.314,103.314c3.657,3.657,3.657,9.143,0,12.8L150.771,468.8c-0.914,0.914-2.743,1.829-4.571,2.743l-135.314,32
                                                    C9.971,503.543,9.057,503.543,8.143,503.543z M49.286,363.657L20.943,482.514L139.8,454.171l321.829-321.829l-90.514-90.514
                                                    L49.286,363.657z M144.371,462.4L144.371,462.4L144.371,462.4z"/>
                                                <path style="fill:#B6B6B6;" d="M92.257,419.429c-4.571,0-8.229-3.657-9.143-8.229c-0.914-4.571,2.743-9.143,8.229-10.057
                                                    l58.514-6.4c4.571-0.914,9.143,2.743,10.057,8.229c0.914,4.571-2.743,9.143-8.229,10.057l-58.514,6.4
                                                    C93.171,419.429,93.171,419.429,92.257,419.429z"/>
                                                <path style="fill:#B6B6B6;" d="M8.143,503.543c-2.743,0-4.571-0.914-6.4-2.743c-3.657-3.657-3.657-9.143,0-12.8l30.171-30.171
                                                    c3.657-3.657,9.143-3.657,12.8,0s3.657,9.143,0,12.8L14.543,500.8C13.629,502.629,10.886,503.543,8.143,503.543z"/>
                                                <path style="fill:#B6B6B6;" d="M474.429,144.229c-2.743,0-4.571-0.914-6.4-2.743L363.8,38.171c-1.829-1.829-2.743-3.657-2.743-6.4
                                                    s0.914-4.571,2.743-6.4c32-32,84.114-32,116.114,0s32,84.114,0,116.114C479,143.314,476.257,144.229,474.429,144.229z
                                                    M383.914,31.771l89.6,89.6c19.2-24.686,16.457-61.257-6.4-83.2C445.171,15.314,408.6,12.571,383.914,31.771z"/>
                                                <path style="fill:#B6B6B6;" d="M422.314,193.6c-2.743,0-4.571-0.914-6.4-2.743L312.6,87.543c-3.657-3.657-3.657-9.143,0-12.8
                                                    c3.657-3.657,9.143-3.657,12.8,0l103.314,103.314c3.657,3.657,3.657,9.143,0,12.8C426.886,192.686,425.057,193.6,422.314,193.6z"
                                                    />
                                                <path style="fill:#B6B6B6;" d="M447.914,167.086c-2.743,0-4.571-0.914-6.4-2.743L338.2,61.029c-3.657-3.657-3.657-9.143,0-12.8
                                                    s9.143-3.657,12.8,0l103.314,103.314c3.657,3.657,3.657,9.143,0,12.8C452.486,166.171,450.657,167.086,447.914,167.086z"/>
                                                <path style="fill:#B6B6B6;" d="M98.657,360.914c-2.743,0-4.571-0.914-6.4-2.743c-3.657-3.657-3.657-9.143,0-12.8l206.629-206.629
                                                    c3.657-3.657,9.143-3.657,12.8,0c3.657,3.657,3.657,9.143,0,12.8L105.971,359.086C104.143,360,101.4,360.914,98.657,360.914z"/>
                                                <path style="fill:#B6B6B6;" d="M150.771,413.029c-2.743,0-4.571-0.914-6.4-2.743c-3.657-3.657-3.657-9.143,0-12.8L351,190.857
                                                    c3.657-3.657,9.143-3.657,12.8,0c3.657,3.657,3.657,9.143,0,12.8L157.171,410.286
                                                    C155.343,412.114,153.514,413.029,150.771,413.029z"/>
                                                <path style="fill:#B6B6B6;" d="M8.143,503.543c-2.743,0-4.571-0.914-6.4-2.743S-1,495.314-1,492.571l32-135.314
                                                    c0-1.829,0.914-2.743,2.743-4.571s3.657-2.743,5.486-2.743c5.486-0.914,54.857-6.4,54.857-6.4c2.743,0,5.486,0.914,7.314,2.743
                                                    c1.829,1.829,2.743,4.571,2.743,7.314l-5.486,46.629l46.629-5.486c2.743,0,5.486,0.914,7.314,2.743s2.743,4.571,2.743,7.314
                                                    l-6.4,56.686c0,0.914,0,2.743,0,3.657c-0.914,2.743-3.657,5.486-6.4,6.4l-131.657,32C9.971,503.543,9.057,503.543,8.143,503.543z
                                                    M48.371,366.4L20.943,481.6L133.4,455.086l4.571-41.143l-46.629,5.486c-2.743,0-5.486-0.914-7.314-2.743
                                                    c-1.829-1.829-3.657-4.571-2.743-7.314l5.486-46.629C74.886,363.657,57.514,365.486,48.371,366.4z"/>
                                            </g>
                                 
                                        </svg>
                                        </a>
                                        <a href='../model/excluirUsuario.php?id_usuario=$id'  class="text-decoration-none ms-2" ><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                                        viewBox="0 0 280.028 280.028" style="enable-background:new 0 0 280.028 280.028;" xml:space="preserve">
                                    <g>
                                        <path style="fill:#CCD0D2;" d="M39.379,70.007v192.519c0,9.661,7.841,17.502,17.502,17.502h166.266
                                            c9.661,0,17.502-7.841,17.502-17.502V70.007H39.379z"/>
                                        <path style="fill:#CCD0D2;" d="M100.635,0h78.758c9.661,0,17.502,7.841,17.502,17.502v17.502h-17.502v-8.751
                                            c0-4.83-3.912-8.751-8.751-8.751h-61.256c-4.839,0-8.751,3.92-8.751,8.751v8.751H83.133V17.502C83.133,7.841,90.974,0,100.635,0z"
                                            />
                                        <path style="fill:#AEB1B3;" d="M74.382,240.648c0,7.254,5.881,13.126,13.126,13.126c7.246,0,13.126-5.872,13.126-13.126V113.49
                                            H74.382V240.648z M179.393,113.49v127.159c0,7.246,5.881,13.126,13.126,13.126c7.246,0,13.126-5.881,13.126-13.126V113.49H179.393z
                                            M126.887,240.648c0,7.246,5.881,13.126,13.126,13.126c7.246,0,13.126-5.881,13.126-13.126V113.49h-26.253L126.887,240.648
                                            L126.887,240.648z"/>
                                        <path style="fill:#AEB1B3;" d="M39.379,78.758h201.27V96.26H39.379V78.758z"/>
                                        <path style="fill:#D1D5D7;" d="M39.379,35.003h201.27c9.661,0,17.502,7.841,17.502,17.502v26.253H21.877V52.505
                                            C21.877,42.844,29.718,35.003,39.379,35.003z"/>
                                    </g>
                                    </svg></a>
                                    </td>
                                    </tr>
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