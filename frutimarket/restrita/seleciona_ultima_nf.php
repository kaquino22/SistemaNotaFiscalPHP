<?php

include '../connection.php';
include 'confirmaSession.php';

$consulta = "SELECT MAX(IdNotaFiscal) as ultima from notafiscal";
$consulta = $connect-> query($consulta);
$linha = $consulta ->fetch_assoc();
$ultimo = $linha['ultima'];


session_start();
$_SESSION['IdNotaFiscal'] = $ultimo;
?>

<!DOCTYPE html>
<html>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleciona</title>
</head>
<body class="text-white" style="text-align: -webkit-center;">
<br>
<br>
<br>
<br>
<div class="card-header bg-secondary col-md-6 text-center">
                                        <strong class="card-title text-light">Selecione o Produto</strong>
                                    </div>
  <div class="card-body col-md-6 bg-primary">
<form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post">

<div class="form-group">
    <label>NF</label>
        <input disable="disabled" readonly="readonly" class="au-input au-input--full email" type="text" name="nf"  value="<?php echo $ultimo; ?>">
</div>
<div class="form-group">
    <label>Produto</label>
        <select class="au-input au-input--full email" name="produto_opcao" id="produto_opcao">

    <?php
    $consulta = "SELECT * from produtos";
    foreach ($connect -> query($consulta) as $linha){
    ?>
    <option value="<?php echo $linha['IdProdutos'];?>"><?php echo $linha['NomeProduto'];?></option>
    <?php
       }
    ?>
    </select>
</div>
    </p>
<div class="form-group">
    <label>Qtde</label>
        <input class="au-input au-input--full email" type="text" name="qtde">
</div>   
    <hr>
    <input  class="btn btn-outline-success btn-lg active" type="submit" value="Cadastra Produto">
</form>
</div>
</body>
</html>