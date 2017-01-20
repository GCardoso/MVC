function editCargo(id){
	$.ajax({
		url: caminhoHttp+'cargo/editar/'+id,
		type: 'GET',
		dataType: 'html',
		success: function(html) {
			abrirModal(html, '<h2>Editar Cargo</h2>')
		}
	});
}

function salvarCargos() {		  	
		$.ajax({
			url: caminhoHttp+'cargo/salvarCargo/',
			type: 'POST',
			data: $('#formularioCargo').serializeArray(),
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

function updateCargo () {
	$.ajax({
		url:caminhoHttp+"cargo/atualizar",
		type:'POST',
		data: $('#formularioCargo').serializeArray(),
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