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

function selecioneTodos() {
	var todosCheckBox = document.getElementsByTagName("input");
		for (var i=1 ; i < todosCheckBox.length; i++) {
			if(todosCheckBox[i].type == "checkbox") {
				todosCheckBox[i].checked =1;
			}
		}
}

function desmarcarTodos() {
		
		var todosCheckBox = document.getElementsByTagName("input");

		for (var i=1 ; i < todosCheckBox.length; i++) {
			if(todosCheckBox[i].type == "checkbox") {
				todosCheckBox[i].checked =0;
			}
		}
}


 function ocultarElementos(elemento) {
 	elemento.style.display = "none";
 }

 function exibirElementos(elemento,elemento2) {
 	elemento.style.display ="";
 	elemento2.style.display="none";
 }

function deleteTodos() {
	var todosCheckBox = document.querySelectorAll("input:checked ");

	var controlador = document.getElementById("controller").value;

	if(todosCheckBox.length == 0 ){
		document.getElementById('alert').className = "alert alert-warning"
		document.getElementById('alert').innerHTML = "Nenhum item selecionado"
		return null;
	}
	for (var i = 0; i <= todosCheckBox.length; i++) {
	    if (todosCheckBox[i].type == 'checkbox' && todosCheckBox[i].checked == 1) {
			var http = new XMLHttpRequest();
		  	http.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			}
		};
			http.open("POST", caminhoHttp +controlador+"/deletar/" + todosCheckBox[i].value, true);
			http.send();
	}
			document.getElementById('alert').className ="alert alert-sucess";
			document.getElementById('alert').innerHTML="Removido com sucesso";
			location.reload(true);
	}	
}


function bigImg(x) {
    x.style.height = "48px";
    x.style.width = "48px";
}

function smallImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}



function initMap() {
		var map;
  		map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: -10.9166389, lng: -37.0655733},
    	zoom: 10
  		});
}

function filtroNome() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("inputBuscarNome");
  filter = input.value.toUpperCase();
  table = document.getElementById("conteudo");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].querySelectorAll("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function filtroData() {
	var input, filter, table, tr, td, i;
  input = document.getElementById("inputBuscarData");
  filter = input.value.toUpperCase();
  table = document.getElementById("conteudo");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].querySelectorAll("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
} 


