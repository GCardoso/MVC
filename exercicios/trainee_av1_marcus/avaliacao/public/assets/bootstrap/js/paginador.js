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
				$('#paginador tr').append('<li><a href="#" onclick="getitens('+i+', '+4+')">'+i+'</a></li>')
			}else{
				$('#paginador tr').append('<li><a href="#" onclick="getitens('+i+', '+4+')">'+i+'</a></td>')
				}
		}
		if(pagina != limitePagina){
			$('#paginador tr').append('<li><a href="#" onclick="getitens('+(pagina+1)+','+4+')">'+i+'</a></li>')
		}
		else if (pagina == limitePagina) {
			$('#paginador tr').append('<li><a href="#" onclick="getitens('+(pagina)+','+4+')">Ultima Pagina</a></li>')
            $("#msg").show();
		}
	}
}

function caminhoAbsoluto() {
	return caminhoHttp + $("#controller").val() + "/consultarajax";

	// var controladores = ["gerenciarFiliados","gerenciarCargo","gerenciarSituacao","gerirEmpresa","gerenciarUsuarios"];

	// var rota = window.location.href;
	// for (var i = 0; i < controladores.length; i++) {
	// 	var url  = window.location.href;
 //        var absoluto = url.split("/")[url.split("/").length -1];
 //        if(absoluto == controladores[i]) {
 //         	var caminho = url.replace(controladores[i],"consultarajax");
 //         	  return caminho;
 //        } 
	// }
	// return rota;
}

/*class Arquivo {

	public function criarArquivo($sNomeArquivo) {
		if (!file_exists($sNomeArquivo)) {
			file_put_contents($sNomeArquivo, "exemplo");
		}
		
		chmod($sNomeArquivo, '777');
	}

	public function criarArquivo($sNomeArquivo) {
		$this->criarArquivoFisico($sNomeArquivo);
		$this->darPermissoes($sNomeArquivo);
	}
	
	public function criarArquivoFisico($sNomeArquivo) {
		$bExiste = $this->VerificarArquivoExiste($sNomeArquivo);
		if ($bExiste) {
			return;
		}
			
		file_put_contents($sNomeArquivo, "exemplo");
	}

	public function verificarArquivoExiste($sNomeArquivo) {
		return file_exists($sNomeArquivo);
	}

	public function darPermissoes($sNomeArquivo) {
		$bExiste = $this->verificarArquivoExiste($sNomeArquivo);

		if (!$bExiste) {
			return;
		}

		chmod($sNomeArquivo, '777');
	}
}*/
