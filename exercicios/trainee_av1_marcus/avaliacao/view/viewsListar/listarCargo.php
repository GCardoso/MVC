<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gerir Cargos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once('view/viewsHead/cssCabecalhos.php'); ?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php'); ?>
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
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
</ul>

<br><br><br>
<br><br>
<div class="alert alert-success col-sm-4"  id="msg" style="display: none ;">
    Listagem Concluida
</div></br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista de Cargos</h2></legend>
<!-- <table class="table table-bordered"> -->
<!--   <tr bgcolor="white">
      <th><h2>Numeração</h2></th>
      <th><h2>Nome do Cargo</h2></th>
      <th><h2>Ação</h2></th>
  </tr> -->
<!-- <?php  foreach($aCargo as $key) { ?>  
  <tr>
    <td><b><?php echo $key['id_cargo'];?></b></td>  
    <td><b><?php echo $key['nome'];?></b></td>
    <td>  <a href="deletar/<?php echo $key['id_cargo']?>" >
          <img src="../imagens/remove.png"></a>
          <b><a href="editar/<?php echo $key['id_cargo'] ?>">
          <img src="../imagens/edit.png"></a></b>
    </td>
  </tr>
 <?php } ?>
</table> -->
<!-- </div> -->
    <button id="selecione">Selecione todos</button>
   <table id="conteudo" class="table table-bordered">   
    </table>
    <br/>
     <ul id="paginador" class="col-sm-4" style="width:300px">
    </div>  
</body>
</html>