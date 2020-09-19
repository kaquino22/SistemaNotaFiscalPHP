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

<body  class="text-white" style="text-align: -webkit-center;">
<br>
<br>
<br>
<br>
                        <section id="Marcas" class="p-t-10">
                        <div class="col-md-12">
                                    <div class="card-header bg-secondary col-md-6 text-center">
                                        <strong class="card-title text-light">Data da Nota Fiscal</strong>
                                    </div>
                                    <div class="card-body text-white bg-primary col-md-6">
                                        <p class="card-text text-light col-md-6">
                                        <form action="gera_nf.php" method="post">
                                        Insira a data da Venda<br>
                                        <input class="au-input au-input--full" type="date" name="data">
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-outline-success au-input--full btn-lg active" value="Continuar">
                                        </form> 
                                        </p>
                                    </div>
                             
                         </div>
                    </section>

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