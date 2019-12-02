<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_fornecedor'])) {
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['nome']);
	$senha = addslashes(md5($_POST['nome']));
	$endereco = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['nome']);




	if (!empty($nome) && !empty($email) && !empty($senha) && !empty($endereco) && !empty($telefone)) {
	
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

