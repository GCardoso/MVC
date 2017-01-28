<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php'); ?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista Usuarios</h2></legend>
<!-- <table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Matricula</h2></th>
      <th><h2>Login</h2></th>
      <th><h2>Senha</h2></th>
      <th><h2>Perfil</h2></th>
      <th><h2>Ação</h2></th>
  </tr>
<?php foreach ($aUsuarios as $key) { ?>

  <tr>
    <td> <?php echo $key['id_user']; ?></td>
    <td> <?php echo $key['login']; ?> </td>
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
          <a href="deletar/<?php echo $key['id_user']?>" >
          <img src="../imagens/remove.png"></a>    
     <?php } ?>     
          <a href="editar/<?php echo $key['id_user'] ?>">
          <img src="../imagens/edit.png"></a>
    </td>
  <?php }?> 
  </tr>
<?php } ?>
</table> -->
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