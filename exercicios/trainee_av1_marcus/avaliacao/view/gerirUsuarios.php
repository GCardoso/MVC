<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminpage">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="adminpage">Home</a></li>
        <li><a href="cadastrar">Cadastro De Usuarios</a></li>
        <li class="active" ><a href="gerenciarUsuarios">Gerir Usuarios</a>
        <li><a href="../empresa/cadastro">Cadastrar Empresa</a></li>
        <li><a href="../empresa/gerirEmpresa">Gerir Empresa</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/gerenciarSituacao"?>">Gerir Situações</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargo</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista Usuarios</h2></legend>
<table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Id Usuario</h2></th>
      <th><h2>login</h2></th>
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
          <span class="glyphicon glyphicon-remove-sign"> Remover</span></a>    
     <?php } ?>     
          <a href="editar/<?php echo $key['id_user'] ?>">
          <span class="glyphicon glyphicon-pencil">Editar</span></a>
    </td>
  <?php }?> 
  </tr>
<?php } ?>
</table>
</div>
</body>
</html> 