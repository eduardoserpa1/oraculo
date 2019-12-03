<?php
    include '../includes/conexao.php';

    $nome_receita = $_POST["nome_receita"];
    $resumo_receita = $_POST["resumo_receita"];
    $modoDePreparo_receita = $_POST["modoDePreparo_receita"];
    $fonte_receita = $_POST["fonte_receita"];
    $valores = $_POST["valores"];
    

    if($_FILES['arquivo']['name']){
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];
            

            // Pega a extensao
        $extensao = strrchr($nome, '.');

            // Converte a extensao para mimusculo
        $extensao = strtolower($extensao);

            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
        if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
            $novoNome = md5(microtime()). $extensao;
                
                // Concatena a pasta com o nome
            $destinoimg = '../../graph/image/' . $novoNome; 
                
                // tenta mover o arquivo para o destino
            @move_uploaded_file( $arquivo_tmp, $destinoimg);
                
        }else{
            echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
        }


        $query = "INSERT INTO Receita(imagem_receita,nome_receita,resumo_receita,modoDePreparo_receita,tipo_receita,fonte_receita)Values('$novoNome','$nome_receita','$resumo_receita','$modoDePreparo_receita','0','$fonte_receita');";
		mysqli_query($link,$query);
        header("Location:../../main/cadastroProduto.html");
        
    }
    $query = "SELECT MAX(id_receita) FROM Receita;";
    $resultado= mysqli_query($link, $query);
    $array = mysqli_fetch_array($resultado);
    $id = $array[0];

    $valoresUnitarios = explode(",", $valores);
    var_dump($valores);
    var_dump($valoresUnitarios);

    foreach ($valoresUnitarios as &$value) {
        echo"aa";
        $id_produto = $value;
        $query = "INSERT INTO Receita_Produto(id_produto,id_receita)Values($id_produto,$id);";
		mysqli_query($link,$query);
    }

    header("Location:../../main/cadastroReceita.html");


    


     
    
    


    /*
SELECT MAX(ID) FROM TABLE
    $valores = $_POST["valor"];
    INSERT INTO Receita_Produto(id_produto,id_receita)Values(1,1);
    $valoresUnitarios = explode(",", $valores);

    for($i = 0;$i<4;$i++){
        
    }
    foreach ($valoresUnitarios as &$value) {
        $query = "INSERT INTO Receita_Produto(id_produto,id_receita)Values(1,1);";
		mysqli_query($link,$query);
    }
      */
?>