<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_login'])) {
	

	$identifica='null';

	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));

	if (!empty($email) && !empty($senha)) {
	
		$query = "SELECT * FROM Consumidor WHERE email_consumidor like '$email' 
											and senha_consumidor like '$senha' ";
		
		$resultado = mysqli_query($link,$query);

		$num_row = mysqli_affected_rows($link);

		if ($num_row>0) {
			$identifica = "consumidor";

		}


		$query = "SELECT * FROM Fornecedor WHERE email_fornecedor like '$email' 
											and senha_fornecedor like '$senha' ";
		
		$resultado = mysqli_query($link,$query);

		$num_row = mysqli_affected_rows($link);

		if ($num_row>0) {
			$identifica = "fornecedor";
		}


		if ($identifica == "fornecedor") {
			$query = "SELECT * FROM Fornecedor WHERE email_fornecedor like '$email' 
											and senha_fornecedor like '$senha' ";
			$resultado = mysqli_query($link,$query);

			$linha = mysqli_fetch_array($resultado);

			$_SESSION['id_sessao'] = $linha['id_fornecedor'];

			echo "o usuario eh um fornecedor";
		}

		if ($identifica == "consumidor") {
			$query = "SELECT * FROM Consumidor WHERE email_consumidor like '$email' 
											and senha_consumidor like '$senha' ";
			$resultado = mysqli_query($link,$query);

			$linha = mysqli_fetch_array($resultado);

			$_SESSION['id_sessao'] = $linha['id_consumidor'];

			echo "o usuario eh um consumidor";
		}

		if ($identifica == "null") {
			echo "usuario ou senha nao encontrados";
		}

	}
}

?>
