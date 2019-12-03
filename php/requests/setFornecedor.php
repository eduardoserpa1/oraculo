<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_fornecedor'])) {
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));
	$endereco = addslashes($_POST['endereco']);
	$telefone = addslashes($_POST['telefone']);




	

		$query = "SELECT * FROM Consumidor WHERE email_consumidor like '$email' ";
		
		$resultado = mysqli_query($link,$query);

		$num_row = mysqli_affected_rows($link);

		if ($num_row==0) {
			
			$query = "INSERT INTO Fornecedor(	nome_fornecedor,
												email_fornecedor,
												senha_fornecedor,
												endereco_fornecedor,
												telefone_fornecedor)
												
						VALUES('$nome','$email','$senha','$endereco','$telefone')";
			mysqli_query($link,$query);
		}
	
}

?>

