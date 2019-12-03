function listarReceitas(){
    $('#central').empty();

    $.ajax({
        url: 'http://localhost/oraculo-1/php/requests/getReceitas.php',
        contentType: 'application/json',
        dataType:"json",


        success: function(response) {
            let tbodyEl = $('#central');

            tbodyEl.html('');
            
            response.forEach(function(Receita) {
                tbodyEl.append('<div style="heigth:300px; width:300px; margin-top:20px;"class="w3-third w3-container"> <img src="../graph/image/'+Receita.imagem_receita+'" alt="Norway" style="width:100%; max-height: 200px;" class=""> <div class="w3-container w3-white"><button onclick="AbrirReceita('+Receita.id_receita+')">'+Receita.nome_receita+'</>');
            });
        }
    
    });
}

function AbrirReceita(id){
    $('#central').empty();

    $.ajax({
        url: 'http://localhost/oraculo-1/php/requests/getReceitas.php',
        contentType: 'application/json',
        dataType:"json",


        success: function(response) {
            let tbodyEl = $('#central');

            tbodyEl.html('');
            
            response.forEach(function(Receita) {
                if(Receita.id_receita==id){
                tbodyEl.append('<div style="text-align:center; width:100%; margin-top:20px;"class="w3-third w3-container"> <img src="../graph/image/'+Receita.imagem_receita+'" alt="Norway" style="width:50%;" class=""> <p>'+Receita.nome_receita+'</><div class="listaDeAtalhos w3-grey"><h3 class=" w3-dark-grey">Lista De Ingredientes</h3><div id="listaDeProdutos'+Receita.id_receita+'"></div></div>  <p>'+Receita.modoDePreparo_receita+'</> <button onclick="listaIngredientes('+Receita.id_receita+')">a</>'   );}});
        }
    
    });
}




function listaIngredientes(id){
    $('#central').empty();
   
    $.ajax({
        url: 'http://localhost/oraculo-1/php/requests/getIngredientes.php',
        contentType: 'application/json',
        dataType:"json",


        success: function(response) {
            
            let tbodyEl = $('#central');
            
            tbodyEl.html('');
            
            response.forEach(function(Receita_Produto) {
                
                if(Receita_Produto.id_receita==id){
                   
                    tbodyEl.append('<p>'+Receita_Produto.nome_produto+'</p>'); 
                }
                });
        }
    
    });
        
       
      
      
}

/*<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>RPG<br>PLAYER</b></h3>
  <a id="bt" href="#" onclick="w3_close()" class="w3-bar-item w3-button">Adicionar atalho</a>
  <br>
  <br>
  
  <div class="listaDeAtalhos w3-grey">
      <h3 class=" w3-dark-grey">Lista De Atalhos</h3>
      <div></div>
  </div>  
  <div class="w3-grey w3-container" style="border-radius: 5px;">

            <div class="w3-col s8 w3-bar">
              <h5 class="">Lista de Ingredientes:</h5>
            </div>
            <hr>
            <div id="listaDeProdutos" class="w3-bar-block">
            </div>
            <input id="valores" class="w3-input w3-border" name="valores" type="text">  
            <br>
      
    </div>


   '<div class="w3-third w3-container">
        <img src="../graph/image/'+imagam+'" alt="Norway" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
            <p><b>'+nome+'/b></p>
            <div class="w3-col s8 w3-bar">
              <h5 class="">Lista de Ingredientes:</h5>
            </div>
            <hr>
            <div id="listaDeProdutos" class="w3-bar-block">
            </div>
            <p>'+modo de preparo+'</p>
        </div>
    </div>'

</nav> */
