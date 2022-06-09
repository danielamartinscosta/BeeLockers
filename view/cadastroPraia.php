<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de reserva de guarda volumes para você aproveitar seu lazer sem ter que se preocupar com seus bens">
    <meta name="author" content="Geovani, Daniela, Julyane, Emily e Pedro">
    <meta name="keyword" content="Praia, armário, guarda volumes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <title>Bee Lockers - Cadastro de Praia</title>
</head>

<script>




$(function(){

$("#buscar_cep").click(function(){

  //Nova variável "cep" somente com dígitos.
  var cep = $("#cep").val().replace(/\D/g, '');

  //Verifica se campo cep possui valor informado.
  if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

       //Consulta o webservice viacep.com.br/
      $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

              if (!("erro" in dados)) {
                  //Atualiza os campos com os valores da consulta.
                  $("#rua").val(dados.logradouro);
                  $("#bairro").val(dados.bairro);
              } //end if.
              else {
                  //CEP pesquisado não foi encontrado.
                  alert("CEP não encontrado.");
              }
          });
      } //end if.
      else {
          alert("Formato de CEP inválido.");
      }
  } //end if.
});
});

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
                                Falta pouco para você se tornar parceiro (a) e ter acesso ao melhor sistema de guarda volume. Cadastre-se e aproveite.
                            </p>
                            <p>
                                Se você já é cadastrado, <a href="home.php">Clique aqui</a> para fazer login.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form method="post" action="../model/cadastrarPraia.php" enctype="multipart/form-data" class="col-md-8">
                        <div class="card">
                            <div class="card-body mb-2 fw-bolder">

                                <div class="row">
                                    <div>
                                        <label for="inputNomePraia" class="form-label">Praia:</label>
                                        <input type="name" name="nome" id="inputNomePraia" class="form-control" placeholder="Digite o nome da praia" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="inputCep" class="form-label">CEP:</label>
                                        <input type="text" class="form-control" name="cep" id="cep" placeholder="Informe o CEP"  required maxlength="9" >
                                        <button type="button" id="buscar_cep"> buscar CEP
                                    </div>

                                    <div class="col-md">
                                        <label for="inputRua" class="form-label">endereço:</label>
                                        <input type="text" name="rua" id="rua" class="form-control" required placeholder="Informe o endereço" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label for="inputNumero" class="form-label">Número:</label>
                                        <input type="number" name="cpf" id="inputNumero" class="form-control" placeholder="Número" required>
                                    </div>

                                    <div class="col-md">
                                        <label for="inputBairro" class="form-label">Bairro:</label>
                                        <input type="text" name="bairro" id="bairro" placeholder="Digite o Bairro" required class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="inputImagemPraia" class="form-label">Imagem:</label>
                                        <input type="file" name="imagem_praia" id="inputImagemPraia" class="form-control" placeholder="Escolha uma imagem" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group form-inline form-switch div-checkbox">
                                        <input type="checkbox" id="txtPermissao" name="txtPermissao" value="1" class="form-check-input" required >
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