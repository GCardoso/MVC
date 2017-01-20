  <script>  
     <?php   if(!empty(Sessao::getsessao('numitensSituacao'))){?>
            var numitens = <?php echo Sessao::getsessao('numitensSituacao') ?>;
     <?php }?>  
   </script>   
   <script>  
            <?php   if(!empty(Sessao::getsessao('limitPaginaSituacao'))){ ?>
                    var limitePagina = <?php  echo Sessao::getsessao('limitPaginaSituacao')?>;
            <?php }?>
   </script>
<table class="table table-bordered">
    <tr bgcolor="white">
    	<th><h2>Numeração</h2></th>
 		<th><h2>Nome da Situacao</h2></th>
      	<th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aSituacao)){ ?>
	    <?php	 foreach ($aSituacao as $key ) { ?>
 	 		<tr>
	    	   <td><?php echo $key['id_situacao']?></td>
 	 		   <td><?php echo $key['nome']?></td>
   	 	       <td><a href="deletar/<?php echo $key['id_situacao'] ?>"><img src="<?php echo LOCAL."imagens/remove.png"?>"></a>
 				   <a href="editar/<?php echo $key['id_situacao']?>"><img src="<?php echo LOCAL."imagens/edit.png"?>"></a> 		
  	 		  </td>
  	 	</tr>
	 	<?php } } ?> 	
</div>