var listaProdutos = [];//lista de atalhos existentes

//cria a lista de atalhos
function criaListaAtalhos(nome_produto,id_produto){
  listaProdutos.push(id_produto,nome_produto);

  $(function(){
    $('#listaDeProdutos').empty();
    for(i=0;i<listaProdutos.length;i+=2){
      //alert(listaProdutos[i]+listaProdutos[i+1]);
      $('#listaDeProdutos').append('<p href="#" class="w3-bar-item w3-button w3-padding" style="border-radius: 10px; background-color: rgb(173,172,172);"onclick="">'+listaProdutos[i]+'<input class="w3-right" type="button" value="Delete"></p>'); 
    }
  });

  //atualizaListaAtalhos();
}
/*
{
  $('#listaDeAtalhos').append('<p href="#" class="w3-bar-item w3-button w3-padding" style="border-radius: 10px; background-color: rgb(173,172,172);"onclick="document.getElementById('+listaAtalhos[i][0][1]+').play();">'+String.fromCharCode(listaAtalhos[i][0][0])+' = '+listaAtalhos[i][0][2]+'<i class="w3-right w3-large fas fa-times-circle" onclick="alert('+lari+');"></i><i class="w3-right w3-large fas fa-play"></i></p>'); 
}*/

//seleciona o audio para criar o atalho
function selctProduto(id_produto,nome_produto){
    criaListaAtalhos(id_produto,nome_produto);//atualiza a lista de atalhos
    console.log(document.cookie);
}




/*
document.addEventListener('keydown', function(e) {
    if (e.keyCode == 108) {
      document.getElementById('4').play();
    }
    if (e.keyCode == 68) {
        document.getElementById('1').play();
      }

  });

  {"0":"1","cod_audio":"1","1":"drag\u00e3o1","nome_audio":"drag\u00e3o1","2":"test test","descricao":"test test","3":"monstro","categoria":"monstro","4":"wav","tipo":"wav","5":"audios\/f8b1c840c06c4036f2d6a63401813377.wav","audio":"audios\/f8b1c840c06c4036f2d6a63401813377.wav","6":"img\/0318666ef0e3f930082722d975e83488.jpg","imagem":"img\/0318666ef0e3f930082722d975e83488.jpg"},{"0":"2","cod_audio":"2","1":"drag\u00e3o1","nome_audio":"drag\u00e3o1","2":"test test","descricao":"test test","3":"monstro","categoria":"monstro","4":"mpeg","tipo":"mpeg","5":"audios\/49bb1d05ed61fccd534bc82c206f7789.mp3","audio":"audios\/49bb1d05ed61fccd534bc82c206f7789.mp3","6":"img\/13c0e9bebd002c25b6b87d0a9c6a5896.jpg","imagem":"img\/13c0e9bebd002c25b6b87d0a9c6a5896.jpg"},
*/