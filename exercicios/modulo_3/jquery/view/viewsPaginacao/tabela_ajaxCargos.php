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
  <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/confirm.js"?>"></script>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Cargo.js"?>"></script>
<div  id="alert" class="alert alert-success" role="alert">Listagem efetuada com sucesso:</div>
<table class="table table-bordered">
    <tr bgcolor="white">
      <th><h2> <img onclick="selecioneTodos()"  ondblclick="desmarcarTodos()" src="../imagens/focus.png" title="Selecione Todos"></h2></th>
    	<th><h2>Numeração</h2></th>
 		  <th><h2>Nome do Cargo</h2></th>
      <th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aValor)){ ?>
	    <?php	 foreach ($aValor as $key ) { ?>
 	 		<tr>
           <td><input  class="marcados"  type="checkbox" id="selecioneItem" value="<?php echo $key['id_cargo']?>"></td>  
	    	   <td><?php echo $key['id_cargo']?></td>
 	 		     <td><?php echo $key['nome']?></td>
   	 	     <td> <a href="deletar/<?php echo $key['id_cargo'] ?>" id="removelink" >
                <img src="<?php echo LOCAL."imagens/remove.png"?>"> </a>
 				        <a  href="#" onclick="editCargo(this.name)" name="<?php echo $key['id_cargo']?>">
                <img src="<?php echo LOCAL."imagens/edit.png"?>"> </a> 		
  	 		  </td>
  	 	</tr>
	 	<?php } } ?>
</div>

