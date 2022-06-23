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
    <title>Bee Lockers - Home</title>
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

                <div class="collapse navbar-collapse " id="nav-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="quemSomos.php" class="nav-link">Quem somos</a>
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
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid div-home ">

                <div class="row">
                    <div class="col-md text-center">
                        <h1><span>Bem-vindo ao <nobr></span>Bee <span>Lockers</span></nobr>
                        </h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md text-center">
                        <p>
                            Está pensando em viajar para a praia e não sabe como guardar seus pertences em segurança?
                        </p>
                        <h2>Temos a solução ideal para você!!!</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form class="col-md-4 div-home" method="post" action="../model/logar.php" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                                <div class="fw-bolder">

                                    <div class="m-1">
                                        <label for="txtUsuario" class="form-label">Usuário:</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                                    </div>
                                    <div class="m-1">
                                        <label for="txtSenha" class="form-label">Senha:</label>
                                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua Senha">
                                    </div>

                                </div>
                                <div class="row mb-2">

                                    <div class="col text-center">
                                        <button type="submit" class="btn text-white btn-custom ">Login</button>
                                    </div>

                                </div>
                                <div class="row text-center mb-2">

                                    <div class="col">
                                        <a href="esqueciSenha.php" class="btn text-warning">Esqueci minha senha</a>
                                    </div>
                                    <div class="col">
                                        <a href="cadastroUsuario.php" class="btn text-warning">Criar uma conta</a>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group form-inline form-switch div-checkbox">
                                        <input type="checkbox" id="txtPermissao" name="txtPermissao" value="1" class="form-check-input" required>
                                        <label for="txtPermissao" class="form-check-label text-white">
                                            De acordo com as Leis 12.965/2014 e 13.709/2018, que regulam o uso da Internet e o tratamento de dados pessoais no Brasil, ao me inscrever autorizo Bee Lockers a enviar notificações por e-mail ou outros meios e concordo com sua Política de Privacidade. <a class="text-warning" href="" data-toggle="modal" data-target="#condicoesUso">Condições da Bee Loockers</a>
                                            e <a class="text-warning" href="" data-toggle="modal" data-target="#politica" target="_blank"> política de privacidade</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Modal termos de uso -->
        <section class="modal fade" id="condicoesUso" tabindex="-1" aria-labelledby="condicoesDeUso" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="condicoesDeUso">Termo de Uso</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis assumenda odit quae numquam obcaecati necessitatibus reiciendis saepe et vero totam earum odio dolor maxime ex corrupti, voluptate possimus fuga velit?</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptatum facere tempore iste id optio, veniam nostrum ad quibusdam eius officia, qui dolor aperiam exercitationem? Esse sed alias possimus at?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, architecto eveniet. Harum accusamus beatae vero dolore nihil quae quod commodi. Quam aut necessitatibus officiis repudiandae molestias quas aperiam tenetur quae!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da janela Modal Termos de Uso -->

        <!-- Modal termos de uso -->
        <section class="modal fade" id="politica" tabindex="-1" aria-labelledby="politicaPrivacidade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="politicaPrivacidade">Política de Privacidade</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis assumenda odit quae numquam obcaecati necessitatibus reiciendis saepe et vero totam earum odio dolor maxime ex corrupti, voluptate possimus fuga velit?</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptatum facere tempore iste id optio, veniam nostrum ad quibusdam eius officia, qui dolor aperiam exercitationem? Esse sed alias possimus at?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, architecto eveniet. Harum accusamus beatae vero dolore nihil quae quod commodi. Quam aut necessitatibus officiis repudiandae molestias quas aperiam tenetur quae!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da janela Modal Termos de Uso -->

        <section class="caixa">
            <!--/Início seção recursos -->
            <div class="card">
                <div class="card-body">

                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-md-4">
                                <img src="../assets/img/facil.png" class="img-fluid">
                                <h4>Fácil de usar</h4>
                                <p>
                                    O BeeLockers vai além do básico e permite que você faça seus passeios e atividades, essenciais para seu lazer, sem nenhuma preocupação. Simples como tem que ser!
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="../assets/img/economize.png" class="img-fluid">
                                <h4>Economize seu tempo</h4>
                                <p>
                                    Tempo é dinheiro! Em segundos, você tem tudo sob controle e aproveite seu tempo com o que realmente importa pra você!
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="../assets/img/suporte.png" class="img-fluid">
                                <h4>Suporte amigo</h4>
                                <p>
                                    Dúvidas? Perguntas? Nosso suporte super legal ajuda você! A gente tá aqui pra resolver seus problemas e deixar sua vida bem mais fácil!
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/FIM seção recursos -->

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