<!DOCTYPE html>
<html lang="en">
<head>
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
<?php
include '../connection.php';
include 'confirmaSession.php';
echo "<br>";

session_start();
$nf = $_SESSION['IdNotaFiscal'];
$id_prod = $_POST['produto_opcao'];
$qtde_prod = $_POST['qtde'];

$consulta = "SELECT precounit,NomeProduto FROM produtos WHERE IdProdutos='$id_prod'";
$consulta = $connect ->query($consulta);
$linha = $consulta -> fetch_assoc();
$preco = $linha['precounit'];
$nome = $linha['NomeProduto'];

$subtotal = $preco * $qtde_prod;


?>
<body class="text-white" style="text-align: -webkit-center;">
<div class="card-header bg-secondary col-md-6 text-center">
                                        <strong class="card-title text-light">Produto</strong>
                                    </div>
  <div class="card-body col-md-6 bg-primary">
<form action="insere_item_nf.php" method="POST">
<div class="form-group">
    <label>Produto Id</label>
    <input class="au-input au-input--full" disable="disabled" readonly="readonly" type="text" name="id_prod" value="<?php echo $id_prod; ?>">
</div>
<div class="form-group">
    <label>Produto</label>
    <input class="au-input au-input--full" disable="disabled" type="text" name="id_prod" value="<?php echo $nome; ?>" readonly="readonly">
</div>
<div class="form-group">
    <label>Valor Unitário</label>
    <input class="au-input au-input--full" disable="disabled" readonly="readonly" type="text" name="id_prod" value="<?php echo $id_prod; ?>">
</div>
<div class="form-group">
    <label>Quantidade</label>
    <input class="au-input au-input--full" disable="disabled" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
</div>
<div class="form-group">
    <label>SubTotal</label>
    <input class="au-input au-input--full" disable="disabled" readonly="readonly" type="text" name="subtotal" value="<?php echo $subtotal; ?>" >
</div>
<input class="btn btn-outline-success btn-lg active" type="submit" value="Adicionar Produto">
</div>
</form>

</body>
</html>