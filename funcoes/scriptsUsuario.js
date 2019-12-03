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
                tbodyEl.append('<div class="w3-third w3-container"><img src="../graph/image/'+Receita.imagem_receita+'" alt="Norway" style="width:100%" class=""><div class="w3-container w3-white"><p><b>'+Receita.nome_receita+'</b></p><div " class="w3-col s8 w3-bar"><h5 class="">Lista de Ingredientes:</h5></div><hr><div id="listaDeIngredientes'+Receita.id_receita+'" class="w3-bar-block"></div></br></br></br><p>'+Receita.modoDePreparo_receita+'</p></div></div>');
            });
        }
    
    });
}

function listaIngredientes(id){

    $.ajax({
        url: 'http://localhost/oraculo-1/php/requests/getIngredientes.php',
        contentType: 'application/json',
        dataType:"json",


        success: function(response) {
            let tbodyEl = $('#listaDeIngredientes'+id);

            tbodyEl.html('');
            
            response.forEach(function(Receita) {
                if(Receita.id_receita == id){
                   // tbodyEl.append('<p href="#" class="w3-bar-item w3-button w3-padding" style="border-radius: 10px; background-color: rgb(173,172,172);"onclick="">'+li+'</p>'); 
                }
                });
        }
    
    });
        
        $(function(){
          $('#listaDeIngredientes').empty();
          for(i=0;i<listaProdutos.length;i+=2){
            //alert(listaProdutos[i]+listaProdutos[i+1]);
            $('#listaDeProdutos').append('<p href="#" class="w3-bar-item w3-button w3-padding" style="border-radius: 10px; background-color: rgb(173,172,172);"onclick="">'+listaProdutos[i]+'<input class="w3-right" onclick="deletLinhaProduto('+i+')" type="button" value="Delete"></p>'); 
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
