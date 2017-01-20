function mensagem() {
   $( "#mensagem" )
  .html('<div class="alert alert-success" role="alert">Área do filiado</div></br>');
}

function alterarConteudoModal(html) {
	$("#myModal .modal-body").html(html);
}

function alterarTituloModal(html) {
	$("#myModal .modal-title").html(html);
}

function abrirModal(conteudo, titulo) {
	alterarConteudoModal(conteudo);
	alterarTituloModal(titulo);
	$('[data-target="#myModal"]')[0].click();
}	

function editDependent(id){
	$.ajax({
		url: caminhoHttp+'filiado/atualizarDependente/'+id,
		type: 'GET',
		dataType: 'html',
		success: function(html) {
			abrirModal(html, '<h2>Editar Dependentes</h2>')
		}
	});
}

function cadastrarDependente() {
	$.ajax({
		url: caminhoHttp+"filiado/cadastrarDependente",
		type:'GET',
		dataType: 'html',
		success:function (html) {
			abrirModal(html,"<h2>Cadastrar Dependentes</h2>")
		}
	});
}
function salvardependentes() {		  	
		$.ajax({
			url: caminhoHttp+'filiado/salvardependentes/',
			type: 'POST',
			data: $('#formularioDependente').serializeArray(),
			dataType: 'json',
			success: function(json) {
				if (json.status) {
					alert(json.msg);
				} else {
					alert(json.msg);
				}
			}
		});
}

function updateDependentes () {
	$.ajax({
		url:caminhoHttp+"filiado/updateDependentes",
		type:'POST',
		data: $('#formularioDependente').serializeArray(),
		dataType: 'json',
		success : function(json) {
			if(json.status){
				alert(json.msg);
			} else {
				alert(json.msg);
			}
		}
	});

}
