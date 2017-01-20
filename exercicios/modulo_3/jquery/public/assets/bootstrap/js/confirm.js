$(document).ready(function(){
              $("td > a#removelink").click(function(){
                if (!confirm("Deseja Realmente remover este item?")){
                return false;
                }
              });
});