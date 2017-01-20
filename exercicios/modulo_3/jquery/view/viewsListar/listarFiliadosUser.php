<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Filiados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php  include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista de Filiados</h2></legend>
<table class="table table-bordered">
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