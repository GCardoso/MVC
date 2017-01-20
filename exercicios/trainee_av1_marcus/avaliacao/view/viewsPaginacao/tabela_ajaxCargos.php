 <script>
     <?php   if(!empty(Sessao::getsessao('numitensCargos'))){?>
            var numitens = <?php echo Sessao::getsessao('numitensCargos') ?>;
     <?php }?>  
   </script>   
   <script>  
            <?php   if(!empty(Sessao::getsessao('limitPaginaCargos'))){ ?>
                    var limitePagina = <?php  echo Sessao::getsessao('limitPaginaCargos')?>;
            <?php }?>
   </script>
<table class="table table-bordered">
    <tr bgcolor="white">
    	<th><h2>Selecione</h2></th>
    	<th><h2>Numeração</h2></th>
 		<th><h2>Nome do Cargo</h2></th>
      	<th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aValor)){ ?>
	   <?php foreach ($aValor as $key ) { ?>
 	 		<tr>
			   <td id="check"><input id="item" type="checkbox" value="<?php echo $key['id_cargo']?>"></td>
	    	   <td><?php echo $key['id_cargo']?></td>
 	 		   <td><?php echo $key['nome']?></td>
   	 	       <td><a href="deletar/<?php echo $key['id_cargo'] ?>"><img src="<?php echo LOCAL."imagens/remove.png"?>"></a>
 				   <a href="editar/<?php echo $key['id_cargo']?>"><img src="<?php echo LOCAL."imagens/edit.png"?>"></a> 		
  	 		  </td>
  	 	</tr>
	 	<?php } } ?>
</div>
 </table>