<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Emily, Daniela, Geovani e Julyane">
        <meta name="keywords" content="Praia, armário, ">
        <!-- CSS Reset -->
       <!-- <link rel="stylesheet" href="../css/reset.css"> -->
       <link rel="stylesheet" href="../css/reset.css">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <!-- CSS próprio -->
        <!-- <link rel="stylesheet" href="../css/style.css"> -->
        <link rel="stylesheet" href="../css/style.css">
        <title>Bee Lockers</title>
    </head>
    <body>

    <header><!--Início cabeçalho-->
            <nav class="navbar navbar-expand-sm navbar-light menu_fundo">
                <div class="container-fluid">
                    
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
                                <a href="login.php" class="nav-link">Entrar</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <div class="bar_laranja"></div>
        </header><!--Fim cabeçalho-->

        <div class="card cor-form">
            <div class="card-body"> 
                <div class="row mb-2 fw-bolder">
                    <table border="1" width="100%" class="table table-striped">
                        <tr class="table-info">
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th>EMAIL</th>
                            <th>SEXO</th>
                            <th>TELEFONE</th>
                            <th>NASCIMENTO</th>
                            <th>AÇÃO</th>
                        </tr>
                </div>
            </div>
        </div>

        <?php

        include "../model/connect.php";

        $sql = "SELECT * FROM usuario";
        // Buscar no banco de dados por meio da query
        // para isso usamos o objeto de conexão e o método query ()
        $result = $conn->query($sql);

        // Montar a lista na tabela
        // Enquanto o fetch array possui registro ele retorna TRUE, e quando ele termina, FALSE
        while ($linha = mysqli_fetch_array($result)) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $email = $linha['email'];
            $sexo = $linha['sexo'];
            $telefone = $linha['telefone'];
            // Formatar a data que será apresentada
            $date = date_create($linha['dtnasc']);
            $nascimento = date_format($date, "d,m,y");

            // Montar a tabela
            $html = <<<HTML
            <tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$email</td>
                <td>$sexo</td>
                <td>$telefone</td>
                <td>$nascimento</td>
            </tr>

            HTML;
            echo $html;
        }

        $result->close();
        $conn->close();

        ?>
        </table>
