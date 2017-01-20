<!DOCTYPE html>
<html lang="en">
<head>
  <title>lista de  Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php'); ?>

</head>
<body>
<?php include_once('view/viewsHead/menuUser.php');?>
<br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista Usuarios</h2></legend>
<!-- <table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Matricula</h2></th>
      <th><h2>Login</h2></th>
      <th><h2>Senha</h2></th>
      <th><h2>Perfil</h2></th> -->
      <!-- <th><h2>Ação</h2></th> -->
  </tr>
<!-- <?php foreach ($aUsuarios as $key) { ?>
  <tr>
    <td><b><?php echo $key['id_user']; ?></b></td>
    <td><b> <?php echo $key['login']; ?> </b></td>
    <td><b> <?php echo $key['senha']; ?> </b></td>
    <td><b> <?php if($key['id_perfil'] == Constantes::$iADM_ID ){
          echo "Administrador";
        } else {
          echo "Usuario";
        } ?> </b>
      </td> -->
    <!-- Bloco de Exibição da Ação ! -->
    <!--   <td>
     <?php if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) { ?>
    <?php if(Sessao::getsessao('logado') != $key['login']) { ?>      
          <b><a href="deletar/<?php echo $key['id_user']?>" >
          <span class="glyphicon glyphicon-remove-sign"> Remover</span></a></b>    
     <?php } ?>     
          <b><a href="editar/<?php echo $key['id_user'] ?>">
          <span class="glyphicon glyphicon-pencil">Editar</span></a></b>
    </td> -->
  <!-- <?php }?>  -->
  <!-- </tr> -->
<!-- <?php } ?> -->
<!-- </table> -->
<table id="conteudo" class="table table-bordered">   
    </table>
    <br/>
     <ul id="paginador" class="col-sm-4" style="width:300px"> 
</div>
</body>
</html> 