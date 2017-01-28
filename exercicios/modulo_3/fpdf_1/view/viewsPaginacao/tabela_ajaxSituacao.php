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
  <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/confirm.js"?>"></script>
  <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Situacao.js"?>"></script>
<div  id="alert" class="alert alert-success" role="alert">Listagem efetuada com sucesso:</div>  
<table class="table table-bordered">
    <tr bgcolor="white">
      <th><h2> <img onclick="selecioneTodos()"  ondblclick="desmarcarTodos()" src="../imagens/focus.png" title="Selecione Todos"></h2></th>
    	<th><h2>Numeração</h2></th>
 		  <th><h2>Nome da Situação</h2></th>
      <th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aSituacao)){ ?>
	    <?php	 foreach ($aSituacao as $key ) { ?>
 	 		<tr>
           <td><input type="checkbox" id="selecioneItem" value="<?php echo $key['id_situacao']?>"></td>    
	    	   <td><?php echo $key['id_situacao']?></td>
 	 		     <td><?php echo $key['nome']?></td>
   	 	       <td><a  id="removelink"   href="deletar/<?php echo $key['id_situacao'] ?>"><img src="<?php echo LOCAL."imagens/remove.png"?>"></a>
 				   <a  href="#" onclick="editSituacao(this.name)" name="<?php echo $key['id_situacao']?>"  ><img   src="<?php echo LOCAL."imagens/edit.png"?>"></a> 	
  	 		  </td>
  	 	</tr>
	 	<?php } } ?> 	
</div>