<?php

session_start();

include '../includes/conexao.php';

$id = $_SESSION['id_sessao'];	

	$query = "SELECT * FROM Fornecedor WHERE id_fornecedor = $id ";

	$resultado = mysqli_query($link,$query);

	if( $linha = mysqli_fetch_array($resultado) ){

	$s = "";

	$s .= $linha['nome_fornecedor'].",";
	$s .= $linha['telefone_fornecedor'].",";
	$s .= $linha['endereco_fornecedor'];


	echo $s;
	
	}



?>
