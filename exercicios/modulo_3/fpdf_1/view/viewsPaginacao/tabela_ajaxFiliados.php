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
  <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/confirm.js"?>"></script>
<div>
<input type="text" id="inputBuscarNome" onkeyup="filtroNome()" placeholder="Procure pelo nome" title="Buscar pelo nome">
<input type="date" id="inputBuscarData" onkeyup="filtroData()" placeholder="Procure pela data de nascimento" title="Buscar pelo nascimento">
</div>
<div  id="alert" class="alert alert-success" role="alert">Listagem efetuada com sucesso:</div>   
<table class="table table-bordered">
    <tr bgcolor="white">
      <th><h2> <img onclick="selecioneTodos()"  ondblclick="desmarcarTodos()" src="../imagens/focus.png" title="Selecione Todos"></h2></th>
      <th><h2>Matricula</h2></th>
      <th><h2>Nome do Filiado</h2></th>
      <th><h2>Qtd Dependentes</h2></th>
      <th><h2>Data de Nascimento</h2></th>
      <th><h2>Idade</h2></th>
       <th><h2>Ação</h2></th>
           	</tr>
             <?php if(!empty($aFiliados)){ ?>
          	   <?php  foreach($aFiliados as $key) { ?>  
             <tr id="tr">
                   <td><input type="checkbox" id="selecioneItem" value="<?php echo $key['id']?>"></td>  
                  <td><b><?php echo $key['id'];?></b></td>  
                  <td><b><?php echo $key['Filiado'];?></b></td>
                 <td>
                  <b> 
                      <a class="pull-left" href="#">
                        <img src="../imagens/koala.png">
                        <span class="badge badge-<?php echo $key['Qtd_Dependentes'] == 0 ? 'red' : 'green' ?> pull-right"><?php echo $key['Qtd_Dependentes'];?></span>
                    </a>
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
                    <a id="removelink" href="deletar/<?php echo $key['id']?>" >
                    <img  onmouseenter="bigImg(this)"   onmouseleave="smallImg(this)"  src="../imagens/remove.png"></a>
                    <b><a href="editar/<?php echo $key['id'] ?>">
                    <img  onmouseenter="bigImg(this)"   onmouseleave="smallImg(this)"  src="../imagens/edit.png"></a></b>
              </td>
            </tr>
            <?php }} ?>	
</div>