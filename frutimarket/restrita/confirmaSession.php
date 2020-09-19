<?php

session_start();

if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  unset( $_SESSION['IdNotaFiscal']);
  header('location:../login.php');
  }

$usuario = $_SESSION['usuario'];
$nome = "";
$sobrenome = "";
$consulta = "SELECT nome,sobrenome FROM cliente WHERE usuario = '$usuario'";
$resultado = $connect->query($consulta);
    
if ($resultado->num_rows > 0) {
  // output data of each row
  while($row = $resultado->fetch_assoc()) {
    $nome = $row["nome"];
    $sobrenome = $row["sobrenome"];
  }
}

?>