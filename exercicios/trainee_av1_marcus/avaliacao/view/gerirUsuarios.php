<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<ul>
    <li><a href="adminpage">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="../login/sair">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Usuario</a>
        <div class="dropdown1-content">
            <a href="cadastrar">Cadastro De Usuarios</a>
            <a href="gerenciarUsuarios">Gerir Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Empresa</a>
        <div class="dropdown1-content">
            <a href="../empresa/cadastro">Cadastrar Empresa</a>
            <a href="../empresa/gerirEmpresa">Gerir Empresa</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Situação</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."avaliacao/situacao/cadastrar"?>">Cadastrar Situação</a>
            <a href="<?php echo APP_ERROS."avaliacao/situacao/gerenciarSituacao"?>">Gerir Situações</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Cargos</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
</ul>
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