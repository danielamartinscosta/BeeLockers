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
    <link rel="stylesheet" href="../css/styleCadastrar.css">
    <title>Bee Lockers</title>
</head>

<body>

    <?php
    // Verificar se existe uma sessão aberta no server
    if (session_start() !== PHP_SESSION_ACTIVE) {
        session_start();

        // Testar se o usuário está logado
        if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        }
    }

    ?>


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
                            <a href="" class="nav-link">Quem somos</a>
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
                    <div class="card cor-form">
                        <div class="card-body">
                            <div class="row mb-2 fw-bolder">

                                <div class="row">
                                    <div class="m-1">
                                        <label for="txtUsuario" class="form-label">Usuário:</label>
                                        <input type="email" name="txtUsuario" id="txtUsuario" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 py-2">
                                        <label for="txtEmail" class="form-label">E-mail:</label>
                                        <input type="email" name="txtEmail" id="txtEmail" placeholder="Seu e-mail" required class="form-control">
                                    </div>

                                    <div class="col-md-4 py-2">
                                        <label for="txtFone" class="form-label">Fone:</label>
                                        <input type="tel" name="txtFone" id="txtFone" class="form-control" required placeholder="(xx) xxxxx-xxxx">
                                    </div>

                                    <div class="col-md-4 py-2">
                                        <label for="txtCpf" class="form-label">CPF:</label>
                                        <input type="number" name="txtCpf" id="txtCpf" class="form-control" placeholder="XXX.XXX.XXX.-XX" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 py-2">
                                        <label for="txtSenha" class="form-label">Senha:</label>
                                        <input type="password" name="txtSenha" id="txtSenha" placeholder="Digite sua senha" required class="form-control">
                                    </div>

                                    <div class="col-md-4 py-2">
                                        <label for="txtNascimento" class="form-label">Data de nascimento:</label>
                                        <input type="date" name="txtNascimento" id="txtNascimento" required class="form-control">
                                    </div>

                                    <div class="col-md-4 py-2">
                                        <label for="txtSexo" class="form-label">Sexo:</label><br>
                                        <select id="txtSexo" name="txtSexo" class="form-control" checked="checked">
                                            <option value="f" selected>Feminino</option>
                                            <option value="m">Masculino</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row justify-content-center">

                                <div class="col-md">
                                    <a type="submit" href="parceiros.php" class="btn text-white btn-custom">Logar</a>

                                    <button type="submit" class="btn text-white btn-custom">Cadastrar</button>
                                </div>

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
                            <a href="" class="btn">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="btn">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="btn">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="btn">
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