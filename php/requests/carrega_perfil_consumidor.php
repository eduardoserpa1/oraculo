<?php

session_start();

include '../includes/conexao.php';

$id = $_SESSION['id_sessao'];	

	$query = "SELECT * FROM Consumidor WHERE id_consumidor = $id ";

	$resultado = mysqli_query($link,$query);

	if( $linha = mysqli_fetch_array($resultado) ){

	$s = "";

	$s .= $linha['nome_consumidor'];
	


	echo $s;
	
	}



?>
