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
		$("#formularioCargo").submit(function(event) {
			$.ajax({
				url: caminhoHttp+'/cargo/salvarCargoModal',
				type: 'POST',
				dataType: 'html',
				data: $("#formularioCargo").serializeArray(),
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function(html) {
				 $("#cargo").html(html);
				 $("#msg").addClass('alert alert-success');
				 $("#msg").text("Cadastrado com sucesso");
				 $("#msg").fadeIn("slow");
				 $("#msg").delay(800);
				 $("#msg").fadeOut("slow");
				 $("#nome").val("");
			});
			return false;
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

function cadastrarCargo(){
	$.ajax({
		url: caminhoHttp+'cargo/cadastroCargoModal',
		type: 'GET',
		dataType: 'html',
		success: function(html) {
			abrirModal(html, '<h2>Cadastrar Cargo</h2>')
		}
	});
}