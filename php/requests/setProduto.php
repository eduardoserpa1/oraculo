<?php
    include '../includes/conexao.php';

    $nome_produto = $_POST['nome'];
     


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


        $query = "INSERT INTO Produto(nome_produto,imagem_produto)Values('$nome_produto','$novoNome');";
		mysqli_query($link,$query);
        header("Location:../../main/cadastroProduto.html");
        
    }
         
?>