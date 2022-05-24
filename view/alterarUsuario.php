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
    <link rel="stylesheet" href="../css/styleCadastrar.css">
    <title>Bee Lockers - Alterar Cadastro</title>
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
        <?php

        // receber o id do usuario a ser alterado e montar o formulario
        $id_usuario = $_GET['id_usuario'];

        //procurar os dados no banco
        //conectar ao banco

        include "../model/connect.php";

        //select no banco para recuperar os dados do usuário
        $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";

        //executar a query

        $result = $conn->query($sql);

        // montar o formulario

        if ($linha = $result->fetch_array()) {
            $id_usuario = $linha['id_usuario'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $email = $linha['email'];
            $sexo = $linha['sexo'];
            $telefone = $linha['telefone'];
            $senha = $linha['senha'];
            $dtnasc = $linha['dtnasc'];
        }
        ?>

        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md div-home text-center">
                        <div>
                            <h1><span>Bem-vindo ao <nobr></span>Bee <span>Lockers</span></nobr>
                            </h1>
                            <p>
                                Falta pouco para você ter acesso ao melhor sistema de guarda volume.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form method="post" action="../model/alterarUsuario.php" enctype="multipart/form-data" class="col-md-8">
                        <div class="card">
                            <div class="card-body mb-2 fw-bolder">

                                <div class="row">
                                    <div>
                                        <label for="inputNome" class="form-label">Usuário:</label>
                                        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Digite seu nome completo" required value="<?= isset($nome)? $nome: ''?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="inputEmail" class="form-label">E-mail:</label>
                                        <input type="email" name="email" id="inputEmail" placeholder="Seu e-mail" required class="form-control" value="<?= isset($email)? $email: ''?>">
                                    </div>

                                    <div class="col-md">
                                        <label for="inputPhone" class="form-label">Fone:</label>
                                        <input type="text" name="telefone" id="inputPhone" class="form-control" required placeholder="(xx) xxxxx-xxxx" value="<?= isset($telefone)? $telefone: ''?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="inputCpf" class="form-label">CPF:</label>
                                        <input type="number" name="cpf" id="inputCpf" class="form-control" placeholder="XXX.XXX.XXX.-XX" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx" value="<?= isset($cpf)? $cpf: ''?>">
                                    </div>

                                    <div class="col-md">
                                        <label for="inputSenha" class="form-label">Senha:</label>
                                        <input type="password" name="senha" id="inputSenha" placeholder="Digite sua senha" required class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="inputDate" class="form-label">Data de nascimento:</label>
                                        <input type="date" name="dtnasc" id="inputDate" required class="form-control" value="<?= isset($dtnasc)? $dtnasc: ''?>">
                                    </div>

                                    <div class="col-md">
                                        <label for="inputSexo" class="form-label">Sexo:</label><br>
                                        <select id="inputSexo" name="sexo" class="form-control" checked="checked">
                                            <option value="F" <?= $sexo == 'F' ? 'selected': '' ?>selected>Feminino</option>
                                            <option value="M"  <?= $sexo == 'M' ? 'selected': '' ?>>Masculino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row text-center">

                                    <div class="col">
                                        <button type="submit" class="btn text-white btn-custom">Alterar</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
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