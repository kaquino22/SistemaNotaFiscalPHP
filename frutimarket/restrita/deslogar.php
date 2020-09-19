<?php

include '../connection.php';
include 'confirmaSession.php';

unset($_SESSION['usuario']);
unset($_SESSION['senha']);
unset( $_SESSION['IdNotaFiscal']);
header('location:../login.php');

?>