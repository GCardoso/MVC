$(document).ready(function(){

$("#cpf").keypress(function(){
	if($("#cpf").val() == null) {
		return null;
	}
	 var cpf = $("#cpf").val();
	 if(cpf.length == 3) {
	 	cpf = cpf +".";
	 } 
	 if(cpf.length == 7) {
	    cpf = cpf +".";
	 }   		
	 if(cpf.length == 11) {
	 	cpf = cpf +"-";		
	 }
	 $("#cpf").val(cpf);	
});

$("#btn-filiado").click(function(){
	$("#main").slideToggle("slow");
	$("#dependente").hide();		
});

$("#btn-dependente").click(function(){
	$("#dependente").slideToggle("slow");
	$("#main").hide();
});

$("#validadorCampos").click(function(){

	if($("#cpf").val() == ""){
		 $("#cpf").css("border-color","red");
	}else{
		$("#cpf").css("border-color","#ccc")
	}

	if($("#nome").val() == ""){
		 $("#nome").css("border-color","red");
	}
	else{
		$("#nome").css("border-color","#ccc")
	}

	if($("#rg").val() == ""){
		 $("#rg").css("border-color","red");
	}
	else{
		$("#rg").css("border-color","#ccc")
	}

	if($("#data_de_nascimento").val() == ""){
		$("#data_de_nascimento").css("border-color","red");
		$("#idade").css("border-color","red");
	}else {
	    $("#data_de_nascimento").css("border-color","#ccc");
		$("#idade").css("border-color","#ccc");
	}

	if($("#empresa").val() == ""){
		$("#empresa").css("border-color","red");
	}else{
		$("#empresa").css("border-color","#ccc");
	}
	if($("#situacao").val() == ""){
		$("#situacao").css("border-color","red");
	}
	else{
		$("#situacao").css("border-color","#ccc");
	}
	if($("#cargo").val() == ""){
		$("#cargo").css("border-color","red");
	}
	else{
		$("#cargo").css("border-color","#ccc");
	}
	if($("#fixo").val() == ""){
		$("#fixo").css("border-color","red");
	}
	else{
		$("#fixo").css("border-color","#ccc");
	}
	if($("#Movel").val() == ""){
		$("#Movel").css("border-color","red");
	}
	else{
		$("#Movel").css("border-color","#ccc");
	}
});

$("#fixo").keypress(function(){
	if($("#fixo").val() == ""){
		return null;
	}

	var fixo = $("#fixo").val();
	if(fixo.length == 4) {
        fixo = fixo +"-";
    } 
     $("#fixo").val(fixo);   
});

$("#Movel").keypress(function(){

	if($("#Movel").val() == ""){
		return null;	
	}		
	var Movel = $("#Movel").val();
	if(Movel.length == 1) {
        Movel = "("+ Movel;
	}
	if(Movel.length == 3) {
		Movel = Movel + ")";
	}
	if(Movel.length == 9) {
		Movel = Movel + "-"
	} 
	 $("#Movel").val(Movel);
});

});
