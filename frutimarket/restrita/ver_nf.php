<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Nota Fiscal</title>
</head>
<body>
<div class="card">
                                    <div class="card-header bg-secondary text-center">
                                        <strong class="card-title text-light">Notas Fiscais</strong>
                                    </div>
                                    </div>
                                    <div class="card-body text-white bg-primary text-center">
                                        <p class="card-text text-light">
                                        
                                    
                                       
                                       
                                      
<?php

include '../connection.php';
include 'confirmaSession.php';


$consulta = "SELECT * FROM notafiscal";

foreach($connect -> query($consulta) as $linha){
?>
<div class="card">
  <div class="card-body table-dark text-left">
     Deletar NF
    <a href="deletaNf.php?nf=<?php echo $linha['IdNotaFiscal'];?>"  class="btn btn-dark">
    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
    </svg>
</a>
<br>
<?php

    echo "NF: ".$linha['IdNotaFiscal']."<br>";
    echo "Data: ".$linha['DataNotaFiscal']."<br>";
    echo "Valor Total R$ :".$linha['valor_total']."<br>";
    $nota = $linha['IdNotaFiscal'];
    $consulta2 = "SELECT * FROM produtosnf WHERE nf = '$nota'";
    foreach($connect -> query($consulta2) as $linha2){
        echo "ID: ".$linha2['id']." - ";
        echo "CodProduto: ".$linha2['idProduto']." - ";
        $codigo = $linha2['idProduto'];
        $consulta3 = "SELECT * FROM produtos WHERE IdProdutos = '$codigo'";
        foreach($connect -> query($consulta3) as $linha3){
            echo "Nome: ".$linha3['NomeProduto']. " - ";
            echo "Valor Unitário R$: ".$linha3['precounit']. " - ";
        }
    echo "Qtde: ".$linha2['qtde']." - ";
    echo "Sub Total R$ : ".$linha2['subtotal']. "<br>";
    }
    echo "<hr>";
?>
  </div>
</div>
<br>
<?php
}
echo "<br>";
echo "<br>";

?>
  <p><a ></a></p>
  <p><a href="index.php" class="btn btn-outline-secondary btn-lg active">Voltar Início</a></p>
  </p>
</div>
</body>
</html>


