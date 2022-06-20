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

    <title>Bee Lockers - Alterar Parceria</title>
</head>
<script type="text/javascript">
    function mask(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmask()", 1)
    }

    function execmask() {
        v_obj.value = v_fun(v_obj.value)
    }


    function maskcnpj(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/, "$1.$2");
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
        v = v.replace(/(\d{4})(\d)/, "$1-$2");
        return v;
    }


    function masktel(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
        v = v.replace(/(\d)(\d{4})$/, "$1-$2");
        return v;
    }

    function idcss(el) {
        return document.getElementById(el);
    }

    window.onload = function() {


        //CELULAR -------
        idcss('telefone').setAttribute('maxlength', 15);
        idcss('telefone').onkeypress = function() {
            mask(this, masktel);
        }
        //-----------

        //CNPJ --------
        idcss('cnpj').setAttribute('maxlength', 18);
        idcss('cnpj').onkeypress = function() {
            mask(this, maskcnpj);
        }
        //-------------

    }
</script>

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

    <main>
        <?php

        // receber o id do usuario a ser alterado e montar o formulario
        $id_parceria = $_GET['id_parceria'];

        //procurar os dados no banco
        //conectar ao banco

        include "../model/connect.php";

        //select no banco para recuperar os dados do usuário
        $sql = "SELECT * FROM parceria WHERE id_parceria = '$id_parceria'";

        //executar a query

        $result = $conn->query($sql);

        // montar o formulario

        if ($linha = $result->fetch_array()) {
            $id_parceria = $linha['id_parceria'];
            $razao_social = $linha['razao_social'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
            $cnpj = $linha['cnpj'];
            $senha = $linha['senha'];
        }
        ?>

        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md div-home text-center">
                        <div>
                            <h1><span>Alteração de cadastro de <nobr></span>Parceria</nobr>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form method="post" action="../model/alterarParceria.php" enctype="multipart/form-data" class="col-md-8">
                        <div class="card">
                            <div class="card-body mb-2 fw-bolder">

                                <div class="row">
                                    <div>
                                        <label class="form-label">ID</label>
                                        <input type="text" name="id_parceria" id="id_parceria" class="form-control" value="<?= $id_parceria ?>" readonly="readonly">
                                    </div>
                                    <div class="col-md">
                                        <label for="razao_social" class="form-label">Razão Social:</label>
                                        <input type="text" name="razao_social" id="razao_social" class="form-control" placeholder="Digite a Razão Social ou Nome do Quiosque" required value="<?= isset($razao_social) ? $razao_social : '' ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="email" class="form-label">E-mail:</label>
                                        <input type="email" name="email" id="email" placeholder="Seu e-mail" required class="form-control" value="<?= isset($email) ? $email : '' ?>">
                                    </div>

                                    <div class="col-md">
                                        <label for="telefone" class="form-label">Fone:</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control" required placeholder="(xx) xxxxx-xxxx" value="<?= isset($telefone) ? $telefone : '' ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="cnpj" class="form-label">cnpj:</label>
                                        <input type="text" name="cnpj" id="cnpj" autocomplete="off" onkeyup="mascara_cpf()" class="form-control" maxlength="14" placeholder="XX.XXX.XXX/XXXX-XX" maxlength="18" required title="Digite um CNPJ no formato: xx.xxx.xxx/xxxx-xx" value="<?= isset($cnpj) ? $cnpj : '' ?>">
                                    </div>

                                    <div class="col-md">
                                        <label for="senha" class="form-label">Senha:</label>
                                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required class="form-control">
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