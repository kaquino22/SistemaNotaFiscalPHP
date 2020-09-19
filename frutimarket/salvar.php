<?php
	include "connection.php";
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cep = $_POST['cep'];
	$logradouro = $_POST['logradouro'];
	$complemento = $_POST['complemento'];
	$numero = $_POST['numero'];
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$nascimento = $_POST['nasc'];
	$uf = "";
	$cidadeS = "";
	
	$SelecionaUF = "SELECT id FROM estados WHERE uf LIKE '$estado'";
    $resultUf = $connect->query($SelecionaUF);
    
    if ($resultUf->num_rows > 0) {
      // output data of each row
      while($row = $resultUf->fetch_assoc()) {
		$uf = $row["id"];
      }
	} 
	
	$SelecionaCidade = "SELECT id FROM cidades WHERE nome LIKE '$cidade'";
    $resultCidade = $connect->query($SelecionaCidade);
    
    if ($resultCidade->num_rows > 0) {
      // output data of each row
      while($rowcidade = $resultCidade->fetch_assoc()) {
		$cidadeS = $rowcidade["id"];
      }
    } 



	$sql = $connect -> prepare("INSERT INTO `cliente`(`Nome`, `Sobrenome`, `Cpf`,`Cep`,DataNasc,IdEstado,IdCidade, `Logradouro`, `Complemento`, `Numero`, 
	`email`, `senha`, `usuario`) VALUES ('$nome','$sobrenome','$cpf','$cep','$nascimento','$uf','$cidadeS','$logradouro','$complemento',
	'$numero','$email','$senha','$usuario')");
	
	$sql -> execute();
?>