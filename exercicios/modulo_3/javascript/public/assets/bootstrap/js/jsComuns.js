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


$(document).ready(function(){
	$("#botao").click(function(){
				$.post( "salvardependentes", 
				     { nomeDependente: $("#nomeDependente").val(),
				      data_de_nascimento: $("#data_de_nascimento").val(),
				      Parentesco: $("#Parentesco").val()});
				      alert("Cadastro efetuado com sucesso");				  	
	});
});

function mensagem() {
   $( "#mensagem" )
  .html('<div class="alert alert-success" role="alert">Área do filiado</div></br>');
}