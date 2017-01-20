function editEmpresa(id){
	$.ajax({
		url: caminhoHttp+'empresa/editar/'+id,
		type: 'GET',
		dataType: 'html',
		success: function(html) {
			abrirModal(html, '<h2>Editar empresa</h2>')
		}
	});
}

function salvarEmpresa() {	  	
	$.ajax({
		url: caminhoHttp+'empresa/salvarEmpresaModal',
		type: 'POST',
		data: $('#formularioEmpresa').serializeArray(),
		dataType: 'html',
		success: function(html) {
			console.log("foi clicado");
			$("#empresa").html(html);
		}
	});
}

function updateEmpresa () {
	$.ajax({
		url:caminhoHttp+"empresa/atualizar",
		type:'POST',
		data: $('#formularioEmpresa').serializeArray(),
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

function CadastrarEmpresa() {
	$.ajax({
		url: caminhoHttp+'empresa/cadastrarEmpresaModal',
		type: 'GET',
		dataType: 'html',
		success : function(html) {
			abrirModal(html,'<h2>Cadastrar Empresa</h2>');
		}
	})
}