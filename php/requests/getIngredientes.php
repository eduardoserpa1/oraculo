<?php
    //busca no banco de dados todos os audios e retorna eles como json
    require '../includes/conexao.php';
    
    $query = "SELECT * FROM Receita_Produto;";
    $resultado= mysqli_query($link, $query);
    $narray = [];
    while($array = mysqli_fetch_array($resultado)){
        $narray[] = $array;
    }
    mysqli_close($link);

    echo json_encode($narray);  
?>