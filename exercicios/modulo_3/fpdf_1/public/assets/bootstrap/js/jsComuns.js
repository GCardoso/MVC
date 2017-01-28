var ObjectFiliado = {
			idade : function(sData_de_nascimento){
					if (sData_de_nascimento == null || sData_de_nascimento == "") {
					} else {
						document.getElementById('idade') = this.calcularIdade(sData_de_nascimento);
					}
				},
			telefone : function (telefone) {
					if(telefone.value == null) {
					   return null;
					}
					   var Movel = telefone.value;
					if(Movel.length == 1) {
				        Movel = "("+ Movel;
					}
					if(Movel.length == 3) {
						Movel = Movel + ")";
					}
					if(Movel.length == 9) {
						Movel = Movel + "-"
					} 
					   telefone.value = Movel;
				 },
			telefone_fixo : function (telefone_fixo) {
					if(telefone_fixo.value == null) {
						return null;
					}
						var fixo = telefone_fixo.value;
					if(fixo.length == 4) {
				        fixo = fixo +"-";
					}
						telefone_fixo.value = fixo;
				},
			 calcularIdade : function (data) {
				var ano = Date.now() - (new Date(data)).getTime();
				var dia = new Date(ano);
				return Math.abs(dia.getUTCFullYear() - 1970);
			 },
			 mascaraCPF : function (cpf) {
					if(cpf.value == null) {
						return null;
					}
					var cpf = cpf.value;
					if(cpf.length == 3) {
				        cpf = cpf +"."
					} if(cpf.length == 7) {	
						cpf = cpf +".";			
					}if(cpf.length == 11) {
					    cpf = cpf +"-";
					}
					document.getElementById('cpf').value = cpf;	
			 },
			ampliarImg : function (img) {
				    img.style.height = "48px";
				    img.style.width = "48px";

			}, 
			
			defaultImg : function (img) {
				    img.style.height = "32px";
				    img.style.width = "32px";
				
			}
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

function AlertMsg(id,Mensagem) {
	$(id).addClass('alert alert-success');
	$(id).text(Mensagem);
	$(id).fadeIn('slow');
	$(id).delay(900);
	$(id).fadeOut("slow");

}

function deletarItem(Rota,id) {
	$.ajax({
		url:  caminhoHttp+Rota+id,
		type: 'GET',
		dataType: 'json',
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function(json) {
		if(json.status == true) {
			createMensagemAlert('alert alert-success',json.msg,"#mensagem",'slow',2000,json.img);
			var reload = location.reload();
			setTimeout(reload,5000);
		}else {
			createMensagemAlert('alert alert-danger',json.msg,'#mensagem','slow',3000,json.img);
		}
	});
}

function createMensagemAlert(Class,Text,id = "#mensagem",Speed = 'slow' ,delay = 1000 ,imagem = null) {
			$(id).addClass(Class);
			$(id).text(" "+Text);
			if(imagem != null ) {
		    	$(id).prepend('<img src='+caminhoHttp+imagem+'>');	
			}
			$(id).fadeIn(Speed);
			$(id).delay(delay);	
			$(id).fadeOut(Speed);
}