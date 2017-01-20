  <script>  
     <?php   if(!empty(Sessao::getsessao('numitensUsuarios'))){?>
            var numitens = <?php echo Sessao::getsessao('numitensUsuarios') ?>;
     <?php }?>  
   </script>   
   <script>  
            <?php   if(!empty(Sessao::getsessao('limitPaginaUsuario'))){ ?>
                    var limitePagina = <?php  echo Sessao::getsessao('limitPaginaUsuario')?>;
            <?php }?>
   </script>
   <div  id="alert" class="alert alert-success" role="alert">Listagem efetuada com sucesso:</div>  
  <!-- <div  id="alert" class="alert alert-success" role="alert" style="display: none">Não existe nenhum elemento selecionado</div>   -->
<table class="table table-bordered">
    <tr bgcolor="white">
      <th><h2> <img onclick="selecioneTodos()"  ondblclick="desmarcarTodos()" src="../imagens/focus.png" title="Selecione Todos"></h2></th>
      <th><h2>Matricula</h2></th>
      <th><h2>Login</h2></th>
      <th><h2>Senha</h2></th>
      <th><h2>Perfil</h2></th>
      <th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aUsuarios)){ ?>
	    <?php	 foreach ($aUsuarios as $key ) { ?>
 	 		<tr>
           <td><input  type="checkbox" id="selecioneItem" value="<?php echo $key['id_user']?>"></td>    
	    	   <td><?php echo $key['id_user']?></td>
 	 		     <td><?php echo $key['login']?></td>
           <td> <?php echo $key['senha']; ?> </td>
   	 	     <td> <?php if($key['id_perfil'] == Constantes::$iADM_ID ){
                echo "Administrador";
              } else {
                echo "Usuario";
             } ?> 
           </td>
           <td> 
             <?php if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) { ?>
             <?php if(Sessao::getsessao('logado') != $key['login']) { ?>      
              <a id="removeLink" href="deletar/<?php echo $key['id_user']?>" >
                <img id="imgRemove"  onmouseenter="bigImg(this)"   onmouseleave="smallImg(this)" onclick="confirmDelete()" src="../imagens/remove.png"></a>   
             <?php } ?>
              <a>    </a>
              <a href="editar/<?php echo $key['id_user'] ?>">
              <img onmouseenter="bigImg(this)"   onmouseleave="smallImg(this)"   src="../imagens/edit.png"></a>
          </td>
          <?php }?>
  	 	</tr>
	 	<?php } } ?> 	
</div>