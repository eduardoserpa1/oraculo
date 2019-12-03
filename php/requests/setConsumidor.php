<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_consumidor'])) {
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));

	
		
		$query = "SELECT * FROM Fornecedor WHERE email_fornecedor like '$email' ";
		
		$resultado = mysqli_query($link,$query);

		$num_row = mysqli_affected_rows($link);


		if ($num_row==0) {
		
			$query = "INSERT INTO Consumidor(nome_consumidor,
											email_consumidor,
											senha_consumidor)

					VALUES('$nome','$email','$senha')	";
			mysqli_query($link,$query);

		}

		

	
}

?>











