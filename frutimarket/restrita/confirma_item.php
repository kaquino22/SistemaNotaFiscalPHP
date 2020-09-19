<?php
 include '../connection.php';
 include 'confirmaSession.php';
 session_start();
 $nf = $_SESSION['IdNotaFiscal'];
?>
<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEM </title>
</head>
<body class="text-white" style="text-align: -webkit-center;">
<br>
<br>
<br>
<div class="card-header bg-secondary col-md-6 text-center">
                                        <strong class="card-title text-light">Nota Fiscal: <?php echo $nf ?></strong>
                                    </div>
<div class="card-body col-md-6 bg-primary">
    <?php
   
    $consulta ="SELECT * FROM produtosnf WHERE Nf = '$nf'";

    $total = 0;
    foreach($connect -> query($consulta) as $linha){
        echo "Cod Produto: ".$linha['idProduto']."<br>";
        echo "Quantidade: ".$linha['qtde']."<br>";
        echo "Subtotal: ".$linha['subtotal']."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }
    echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
    ?>
    <br>
    <p>O QUE DESEJA FAZER?</p>
    <br>
    <p><a class="btn btn-outline-success btn-lg active"  href="seleciona_ultima_nf.php"> INSERIR OUTRO PRODUTO </a></p>
    <br>
    <p><a class="btn btn-outline-success btn-lg active"  href="finalizar.php?total=<?php echo $total; ?>"> FINALIZAR NOTA FISCAL </a></a>
    </div>
</body>
</html>