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
<!--   <tr bgcolor="white">
      <th><h2>Matricula</h2></th>
      <th><h2>Nome do Filiado</h2></th>
      <th><h2>Qtd.Dependentes</h2></th>
      <th><h2>Data de nascimento</h2></th>
      <th><h2>Idade</h2></th>
       <th><h2>Remover ou Editar</h2></th>
  </tr> -->
<!-- <?php  foreach($aFiliados as $key) { ?>  
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
 <?php } ?> -->
  <table id="conteudo" class="table table-bordered">   
    </table>
    <br/>
     <ul id="paginador" class="col-sm-4" style="width:300px">   
    </div> 
</body>
</html>