<?php

include '../connection.php';

include 'confirmaSession.php';

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Abra sua Filial e tenha controle das suas notas fiscais.">
    <meta name="author" content="Kauã Maia Aquino">
    <meta name="keywords" content="Notas Fiscais, Vendas, Filiais">
    <link rel="icon" href="../images/nf.ico">
    <!-- Title Page-->
    <title>FrutiMarket - Suas Notas Fiscais em segurança</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="">
        <!-- HEADER DESKTOP-->
        <?php
      include 'header.php';
      ?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Menu</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Início</li>
                                    </ul>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Bem-Vindo de Volta <?php echo $nome ?> <?php echo $sobrenome?>!</h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                    <section id="notaFiscal" class="p-t-10">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-secondary text-center">
                                        <strong class="card-title text-light">Nota Fiscal</strong>
                                    </div>
                                    <div class="card-body text-white bg-primary text-center">
                                        <p class="card-text text-light">
                                        <a class="btn btn-outline-success btn-lg active" href="notaFiscalDt.php">Iniciar Nova Venda</a>
                                        <br>
                                        <br>
                                        <a href="ver_nf.php" class="btn btn-outline-secondary btn-lg active">Ver Notas Emitidas</a>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </section>
                        <section id="Produtos" class="p-t-10">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-secondary text-center">
                                        <strong class="card-title text-light">Produtos</strong>
                                    </div>
                                    <div class="card-body text-white bg-primary text-center">
                                        <p class="card-text text-light">
                                        <a href="cadastrarProduto.php" class="btn btn-outline-success btn-lg active">Cadastrar Produtos</a>
                                        <br>
                                        <br>
                                        <a href="verProdutos.php" class="btn btn-outline-secondary btn-lg active">Ver todos os Produtos</a>
                                        
                                        </p>
                                    </div>
                                </div>
                        </div>
                        </section>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
