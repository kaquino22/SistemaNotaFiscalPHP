<?php
session_start();  //Campos para validação - > Chaves Primarias, Emails, Id,

include 'connection.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$consulta = "SELECT * FROM cliente WHERE usuario = '$usuario' AND senha = '$senha'";

$resultado = $connect->query($consulta);
$registros = $resultado->num_rows; //esperamos 1 linha de registro
$resultado_usuario = mysqli_fetch_assoc($resultado);
//Sessao PHP proxima aula

if ($registros == 1){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;

	header('Location: restrita/index.php');
} else {
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
	header('Location: login.php');	
}

?>

