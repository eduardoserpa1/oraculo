<?php
    include '../includes/conexao.php';

    foreach($_POST as $key=>$value){
        echo "$key=$value"; 
    }

    /*

    $valores = $_POST["valor"];
    $valoresUnitarios = explode(",", $valores);

    for($i = 0;$i<4;$i++){
        
    }
    foreach ($valoresUnitarios as &$value) {
        $query = "INSERT INTO Receita_Produto(id_produto,id_receita)Values(1,1);";
		mysqli_query($link,$query);
    }
      */
?>