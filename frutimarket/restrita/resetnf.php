<?php
include '../connection.php';
include 'confirmaSession.php';
session_start();

unset(
    $_SESSION['IdNotaFiscal']
);

header('Location: index.php');
?>