<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_consumidor'])) {
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if (!empty($nome) && !empty($email) && !empty($senha)) {
	
		$query = "INSERT INTO Consumidor(nome_consumidor,email_consumidor,senha_consumidor)
					VALUES('$nome','$email','$senha')	";
		mysqli_query($link,$query);
		
	}
}

?>











