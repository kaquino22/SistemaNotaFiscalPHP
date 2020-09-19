<?php

include '../connection.php';
include 'confirmaSession.php';
echo "<br>";
session_start();
$nf = $_SESSION['IdNotaFiscal'];
$id_produto = $_POST['id_prod'];
$qtde = $_POST['qtde'];
$subtotal = $_POST['subtotal'];

echo "NF -> " .$nf. "<br>";
echo "ID_PRODUTO -> " .$id_produto. "<br>";
echo "QTDE -> " .$qtde. "<br>";
echo "SUBTOTAL -> " .$subtotal. "<br>";

$consulta = $connect -> prepare(
    "INSERT INTO produtosnf(idProduto, Nf, qtde, subtotal)
    VALUES('$id_produto','$nf','$qtde','$subtotal')");
$consulta -> execute();
header('Location: confirma_item.php');
?>