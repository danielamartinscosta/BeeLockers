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
    <title>Bee Lockers - Cadastrar Parceria</title>
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
        
        
        function maskcnpj(v){
            v=v.replace(/\D/g,"");                        
            v=v.replace(/^(\d{2})(\d)/,"$1.$2");          
            v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3");
            v=v.replace(/\.(\d{3})(\d)/,".$1/$2");       
            v=v.replace(/(\d{4})(\d)/,"$1-$2");
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
	        idcss('cnpj').onkeypress = function(){
		        mask( this, maskcnpj );
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
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md div-home text-center">
                        <div>
                            <h1><span>Bem-vindo ao <nobr></span>Bee <span>Lockers</span></nobr>
                            </h1>
                            <p>Tem um local que gostaria de disponibilizar para locação de armários e ganhar uma grana? Faça parceria com a gente!</p>
                            <p>    
                            Falta pouco para você se tornar parceiro (a) e ter acesso ao melhor sistema de guarda volume.  Cadastre-se e aproveite.
                            </p>
                            <p>
                                Se você já é cadastrado, <a href="home.php">Clique aqui</a> para fazer login.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form method="post" action="../model/cadastroParceria.php" enctype="multipart/form-data" class="col-md-8">
                        <div class="card">
                            <div class="card-body mb-2 fw-bolder">

                                <div class="row">
                                    <div>
                                        <label for="razao_social" class="form-label">Razão Social:</label>
                                        <input type="name" name="razao_social" id="razao_social" class="form-control" placeholder="Digite o nome da empresa ou do quiosque" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div>
                                        <label for="id_tipo" class="form-label"></label>
                                        <input type="hidden" name="id_tipo" id="id_tipo" class="form-control" placeholder=""  >
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md">
                                        <label for="email" class="form-label">E-mail:</label>
                                        <input type="email" name="email" id="email" placeholder="Seu e-mail" required class="form-control">
                                    </div>

                                    <div class="col-md">
                                        <label for="telefone" class="form-label">Telefone:</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control" required placeholder="(xx) xxxxx-xxxx">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="cnpj" class="form-label">CNPJ:</label>
                                        <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="XX.XXX.XXX/XXXX-XX" required maxlength="18" title="Digite um CNPJ no formato: xx.xxx.xxx/xxxx-xx">
                                    </div>

                                    <div class="col-md">
                                        <label for="senha" class="form-label">Senha:</label>
                                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group form-inline form-switch div-checkbox">
                                        <input type="checkbox" id="txtPermissao" name="txtPermissao" value="1" class="form-check-input" required>
                                        <label for="txtPermissao" class="form-check-label text-white">
                                        De acordo com as Leis 12.965/2014 e 13.709/2018, que regulam o uso da Internet e o tratamento de dados pessoais no Brasil, ao me inscrever autorizo Bee Lockers a enviar notificações por e-mail ou outros meios e concordo com sua Política de Privacidade. <a class="text-warning" href="" target="_blank">condições da Bee Loockers</a>
                                        e<a class="text-warning" href="" target="_blank"> política de privacidade</a>.
                                        </label>
                                    </div>
                                </div>

                                <div class="row text-center">

                                    <div class="col">
                                        <button type="submit" class="btn text-white btn-custom">Cadastrar</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </section>
    </main><!-- Fim do Conteúdo Principal-->

    <footer><!--Início do rodapé-->
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
    </footer><!--Fim do rodapé-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>