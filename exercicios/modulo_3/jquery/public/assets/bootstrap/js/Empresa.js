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
	$("#formularioEmpresa").submit(function(event) {
	    $.ajax({
	    	url: caminhoHttp+"empresa/salvarEmpresaModal",
	    	type: 'POST',
	    	dataType: 'html',
	    	data: $("#formularioEmpresa").serializeArray(),
	    })
	    .done(function() {
	    	console.log("success");
	    })
	    .fail(function() {
	    	console.log("error");
	    })
	    .always(function(html) {
	    	 $("#empresaSelect").html(html);
			 $("#msg").addClass('alert alert-success');
			 $("#msg").text("Cadastrado com sucesso");
			 $("#msg").fadeIn("slow");
			 $("#msg").delay(800);
			 $("#msg").fadeOut("slow");
			 $("#empresa").val("");
	    });
	 return false;
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