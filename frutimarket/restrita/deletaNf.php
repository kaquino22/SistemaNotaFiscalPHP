<?php

include '../connection.php';
include 'confirmaSession.php';
$nf = $_GET['nf'];

$sql1 = $connect -> prepare ("DELETE FROM `produtosnf` WHERE Nf = '$nf'");

$sql1 -> execute();

$sql = $connect -> prepare ("DELETE FROM `notafiscal` WHERE IdNotaFiscal = '$nf'");

$sql -> execute();


header('Location: ver_nf.php');	
?>