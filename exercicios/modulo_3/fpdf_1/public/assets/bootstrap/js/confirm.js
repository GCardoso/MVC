function confirm(item){
       		$.confirm({
					    title: 'Atençao!',
					    content: 'Deseja Realmente  <b>Excluir</b> este item??',
					    type:'green',
					    theme:'supervan',
					    buttons: {
					        confirmar: {
					        	btnClass:"btn-green",
						        action:	function () {
						            $("a[name="+item+"]").trigger('onload');
						        }
					       },
					        cancelar:{ 
						        btnClass : "btn-red",	
						        action:function () {
						        	$.alert("<h1>Cancelado!!</h1>");
						        }
					   	   }     
					    }
			});
}

           // $("td > a#removelink").click(function(event){
              //   if (!confirm("Deseja Realmente remover este item?")){
              //    event.preventDefault();
              //   } 
              //   $("td > a#removelink").click();
              // });