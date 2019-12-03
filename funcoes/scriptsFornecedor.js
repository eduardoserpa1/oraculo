$(function(){
    //solicita e recebe os audios como json e os insere no html
    $.ajax({
        url: 'http://192.168.15.218/oraculo-1/php/requests/getProdutos.php',
        contentType: 'application/json',
        dataType:"json",


        success: function(response) {
            let tbodyEl = $(' ');

            tbodyEl.html('');
            
            response.forEach(function(Produto) {
                var nome = "'"+Produto.nome_produto+"'";
                tbodyEl.append('<div class="blocos" name="'+Produto.id_produto+'" ><img src="../graph/image/'+Produto.imagem_produto+'" height="42" width="42"><button id="btAds" onclick="selctProduto('+Produto.id_produto+','+nome+')">Adicionar<br>'+nome+'</button></div>');
            });
        }
    
    });
});

/*<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>RPG<br>PLAYER</b></h3>
  <a id="bt" href="#" onclick="w3_close()" class="w3-bar-item w3-button">Adicionar atalho</a>
  <br>
  <br>
  
  <div class="listaDeAtalhos w3-grey">
      <h3 class=" w3-dark-grey">Lista De Atalhos</h3>
      <div></div>
     
      
  </div>  

</nav> */
