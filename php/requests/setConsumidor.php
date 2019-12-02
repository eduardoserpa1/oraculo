<?php

include '../includes/conexao.php';

if (!empty($_POST['enviar_cadastro_consumidor'])) {
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));

	if (!empty($nome) && !empty($email) && !empty($senha)) {
	
		$query = "INSERT INTO Consumidor(nome_consumidor,email_consumidor,senha_consumidor)
					VALUES('$nome','$email','$senha')	";
		mysqli_query($link,$query);
		
	}
}

?>











