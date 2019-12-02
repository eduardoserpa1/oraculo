<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_fornecedor'])) {
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];




	if (!empty($nome) && !empty($email) && !empty($senha)) {
	
		$query = "INSERT INTO Consumidor(	nome_fornecedor,
											email_fornecedor,
											senha_fornecedor,
											endereco_fornecedor,
											telefone_fornecedor)
					VALUES('$nome','$email','$senha','$endereco','$telefone')";
		mysqli_query($link,$query);

	}
}

?>

