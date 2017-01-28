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

function salvarSituacao() {		
		$("#formularioSituacao").submit(function(event) {	 
		$.ajax({
			url: caminhoHttp+'situacao/salvarSituacaoModal',
			type: 'POST',
			dataType: 'html',
			data: $("#formularioSituacao").serializeArray(),
		})
		.done(function(html) {
			  $("#situacao").html(html);
			  $("#msg").text("Cadastrado com sucesso");
			  $("#nome").val("");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function(html) {
			 $("#situacao").html(html);
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

function cadastrarSituacao() {
	$.ajax({
		url: caminhoHttp+'situacao/cadastrarSituacaoModal',
		type: 'GET',
		dataType: 'html',
	})
	.done(function(html) {
		abrirModal(html,"Cadastro de Situação")
	})
	.fail(function() {
		console.log("erro");
	})
	.always(function() {
		console.log("complete");
	});
}
