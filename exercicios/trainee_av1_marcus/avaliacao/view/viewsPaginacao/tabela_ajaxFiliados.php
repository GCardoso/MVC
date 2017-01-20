  <script>  
     <?php   if(!empty(Sessao::getsessao('numitensFiliados'))){?>
            var numitens = <?php echo Sessao::getsessao('numitensFiliados') ?>;
     <?php }?>  
   </script>   
   <script>  
            <?php   if(!empty(Sessao::getsessao('limitPaginaFiliados'))){ ?>
                    var limitePagina = <?php  echo Sessao::getsessao('limitPaginaFiliados')?>;
            <?php }?>
   </script>
<table class="table table-bordered">
    <tr bgcolor="white">
    	<th><h2>Numeração</h2></th>
 		<th><h2>Nome da Situacao</h2></th>
      	<th><h2>Ação</h2></th>
           	</tr>
             <?php if(!empty($aFiliados)){ ?>
          	   <?php  foreach($aFiliados as $key) { ?>  
             <tr>
                  <td><b><?php echo $key['id'];?></b></td>  
                  <td><b><?php echo $key['Filiado'];?></b></td>
                 <td>
                  <b>
                     <?php echo $key['Qtd_Dependentes'];?>
                      <?php for ($i =0 ; $i < $key['Qtd_Dependentes'] ;$i++) { ?>
                      <img src="../imagens/koala.png"></b><?php }?>
                  </b> 
                </td>
                <td>
                  <b> 
                    <?php if($key['data'] != null ) {?>  
                        <?php echo $key['data'];?>
                    <?php } else {?>
                         Nao cadastrou data de nascimento
                    <?php }?>    
                  </b>
                </td> 
               <td>
                  <b> 
                    <?php if($key['idade'] != null ) {?>  
                        <?php echo $key['idade'];?>
                    <?php } else {?>
                         Nao cadastrou idade
                    <?php }?> </b>  
                </td> 
                <td> 
                    <a href="deletar/<?php echo $key['id']?>" >
                    <img src="../imagens/remove.png"></a>
                    <b><a href="editar/<?php echo $key['id'] ?>">
                    <img src="../imagens/edit.png"></a></b>
              </td>
            </tr>
            <?php }} ?>	
</div>