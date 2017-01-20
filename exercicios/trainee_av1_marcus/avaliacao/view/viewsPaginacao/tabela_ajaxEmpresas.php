<script>  
     <?php   if(!empty(Sessao::getsessao('numitensEmpresas'))){?>
            var numitens = <?php echo Sessao::getsessao('numitensEmpresas') ?>;
     <?php }?>  
   </script>   
   <script>  
            <?php   if(!empty(Sessao::getsessao('limitPaginaEmpresas'))){ ?>
                    var limitePagina = <?php  echo Sessao::getsessao('limitPaginaEmpresas')?>;
            <?php }?>
   </script>
<table class="table table-bordered">
    <tr bgcolor="white">
    	<th><h2>Numeração</h2></th>
 		<th><h2>Nome da Empresa</h2></th>
      	<th><h2>Ação</h2></th>
 	</tr>
   <?php if(!empty($aEmpresas)){ ?>
	    <?php	 foreach ($aEmpresas as $key ) { ?>
 	 		<tr>
	    	   <td><?php echo $key['id_empresa']?></td>
 	 		   <td><?php echo $key['nome']?></td>
   	 	       <td><a href="deletar/<?php echo $key['id_empresa'] ?>"><img src="<?php echo LOCAL."imagens/remove.png"?>"></a>
 				   <a href="editar/<?php echo $key['id_empresa']?>"><img src="<?php echo LOCAL."imagens/edit.png"?>"></a> 		
  	 		  </td>
  	 	</tr>
	 	<?php } } ?> 	
</div>