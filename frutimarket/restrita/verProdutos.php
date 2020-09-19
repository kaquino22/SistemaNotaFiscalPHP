<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Produtos</title>
</head>
<body>
<div class="card text-center">
    <div class="card-header bg-secondary text-center">
        <strong class="card-title text-light">Produtos</strong>
    </div>
    </div>
     <div class="card-body text-white bg-primary text-center">
      <p class="card-text text-light">
<?php

include '../connection.php';
include 'confirmaSession.php';


$consulta = "SELECT * FROM produtos";

foreach($connect -> query($consulta) as $linha){
?>
<div class="card text-center">
  <div class="card-body table-dark text-center">
  <div class="container">
    <div class="row">
    <div class="col-md-3">
        Id<br>
    <?php echo $linha['IdProdutos'] ?>
    </div>
    <div class="col-md-3">
        Nome<br>
    <?php echo $linha['NomeProduto'] ?>
    </div>
    <div class="col-md-3">
        Valor Unit<br>
    R$<?php echo $linha['precounit'] ?>
    </div>
    
</div>
</div>
    </div>
    </div>
<br>
<?php } ?>
<p><a ></a></p>
  <p><a href="index.php" class="btn btn-outline-secondary btn-lg active">Voltar Início</a></p>
  </p>
</div>
</body>
</html>