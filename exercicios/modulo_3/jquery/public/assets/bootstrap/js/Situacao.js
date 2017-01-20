function editSituacao(id){
	$.ajax({
		url: caminhoHttp+'situacao/editar'+id,
		type: 'GET',
		dataType: 'html',
		success: function(html) {
			abrirModal(html, '<h2>Editar Situação</h2>')
		}
	});
}

function salvardependentes() {		  	
		$.ajax({
			url: caminhoHttp+'filiado/salvardependentes/',
			type: 'POST',
			data: $('#formularioSituacao').serializeArray(),
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

function updateSituacao() {
	$.ajax({
		url:caminhoHttp+"situacao/atualizar",
		type:'POST',
		data: $('#formularioSituacao').serializeArray(),
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
