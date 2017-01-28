$(document).ready(function(){
		$("#btn-Usuario-Cadastrar").on('click',function(){
				$.ajax({
					url: caminhoHttp+'usuario/salvar',
					type: 'POST',
					dataType: 'html',
					data: $("#formulariUsuario").serializeArray(),
					success: function(html){
						$("#alertCadastro").addClass('alert alert-success')
									   .text("Cadastro efetuado com sucesso")
									   .fadeIn("fast")
									   .delay(2000)
									   .fadeOut('slow');			
					},
					error: function() {
							html.html($("#alertCadastro").addClass('alert alert-danger')
									   .text("Nao foi efetuado o cadastro")
									   .fadeIn("slow")
									   .delay(1000)
									   .fadeOut('slow'));
				    }  	
				})
		});

		$("#alertCadastro").addClass("alert alert-success")
						   .text("Bem vindo Area de cadastro")
						   .fadeIn('slow')
						   .delay(800)
						   .fadeOut('slow');	
});
