<?php
include '../connection.php';
include 'confirmaSession.php';

$data_atual = $_POST['data'];

$consulta = $connect -> prepare("INSERT INTO notafiscal (DataNotaFiscal) VALUES('$data_atual')");

$consulta -> execute();

header('Location: seleciona_ultima_nf.php');
?>