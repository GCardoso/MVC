function Idade(){
	sData_de_nascimento = document.getElementById('data_de_nascimento').value;
	if (sData_de_nascimento == null || sData_de_nascimento == "") {
		
	} else {
		document.getElementById("idade").value = calculateAge(sData_de_nascimento);
	}
}

function calculateAge(data) {
	var ano = Date.now() - (new Date(data)).getTime();
	var dia = new Date(ano);
	return Math.abs(dia.getUTCFullYear() - 1970);
}

function mascaraCPF () {
	
	if(document.getElementById('cpf').value == null) {
		return null;
	}
	var cpf = document.getElementById('cpf').value;
	if(cpf.length == 3) {
        cpf = cpf +"."
	} if(cpf.length == 7) {	
		cpf = cpf +".";			
	}if(cpf.length == 11) {
	    cpf = cpf +"-";
	}
	document.getElementById('cpf').value = cpf;
}

function Telfixo() {
	if(document.getElementById('fixo').value == null) {
		return null;
	}
	var fixo = document.getElementById('fixo').value;
	if(fixo.length == 4) {
        fixo = fixo +"-";
	}
	document.getElementById('fixo').value = fixo;

}

function TelMovel () {
	if(document.getElementById('Movel').value == null) {
		return null;
	}
	var Movel = document.getElementById('Movel').value;
	if(Movel.length == 1) {
        Movel = "("+ Movel;
	}
	if(Movel.length == 3) {
		Movel = Movel + ")";
	}
	if(Movel.length == 9) {
		Movel = Movel + "-"
	} 
	document.getElementById('Movel').value = Movel;

}


