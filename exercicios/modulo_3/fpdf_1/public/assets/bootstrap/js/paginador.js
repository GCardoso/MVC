var numitens =4;
var pagina=1;
var limitePagina = 2;

$(document).ready(function(){
	if(pagina <= limitePagina){
		getitens(pagina,numitens); //Chamando função que lista os itens		
	}else {
		$(document).on("click","#paginador",function(ev){
		ev.preventDefault();
		form.load($(this).attr("value"));
		});
	}
	
})

function getitens(pag){
	pagina=pag; 
	$.ajax({
	type: 'POST',
	data: {'pagina':pag },
	url: caminhoAbsoluto(),
   	success: function(retorno){
    	$('#conteudo').html(retorno);
        	contador() //Chamando função que conta os itens e chama o paginador
     	}
    })
}

function contador(){
	$.ajax({
      	type: 'POST',
      	data: 'contador',
      	url: caminhoAbsoluto(),
   		success: function(retorno_pg){
         paginador(retorno_pg);
      	}
    })
}

function paginador(cont){
	if(cont<numitens){ //Verificando se há mais de uma página
		$('#paginador').html('<tr><td> uma Página<td><tr>')
	}else{
		$('#paginador').html('<tr></tr>');
		if(pagina!=1){ 
			$('#paginador tr').append('<li><a href="#" onclick="getitens('+(pagina-1)+', '+4+')"></a></li>');
		}
		//arredondando divisão fracionada para cima
		for(var i=1;i<limitePagina;i++){
			if(pagina==i){
				$('#paginador tr').append('<li><a href="#" onclick="getitens('+i+', '+4+')">'+i+'</a></li>');
			}else{
				$('#paginador tr').append('<li><a href="#" onclick="getitens('+i+', '+4+')">'+i+'</a></td>');
				}
		}
		if(pagina != limitePagina){
			$('#paginador tr').append('<li><a href="#" onclick="getitens('+(pagina+1)+','+4+')">'+i+'</a></li>');
		}
		else if (pagina == limitePagina) {
			$('#paginador tr').append('<li><a href="#" onclick="getitens('+(pagina)+','+4+')">Ultima Pagina</a></li>');
		}

	}
}

function caminhoAbsoluto() {
	return caminhoHttp + $("#controller").val() + "/consultarajax";

}