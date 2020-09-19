<?php

include '../connection.php';
include 'confirmaSession.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = $connect -> prepare ("INSERT INTO `produtos`( `NomeProduto`, `precounit`) VALUES ('$nome', '$preco')");

$sql -> execute();
?>