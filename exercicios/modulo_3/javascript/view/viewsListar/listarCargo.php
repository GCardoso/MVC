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
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista de Cargos</h2></legend>
   <table id="conteudo" class="table table-bordered"> 
    </table>
    <label>
       <button class="btn btn-default" id="btn-deleteAll" onclick="deleteTodos()">Deletar Todos Selecionados</button> 
    </label>
    <br/>
     <ul id="paginador" class="col-sm-4" style="width:300px"> 
    </div>  
</body>
</html>