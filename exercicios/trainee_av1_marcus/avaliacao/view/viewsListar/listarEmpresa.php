<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gerir Empresas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/help.css">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">  
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo APP_ERROS."avaliacao/usuario/adminpage"?>" >Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href= "<?php echo APP_ERROS."avaliacao/usuario/adminpage" ?>">Home</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/usuario/cadastrar"?>">Cadastro De Usuarios</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Gerir Usuarios</a></li>
        <li><a href="../empresa/cadastro">Cadastrar Empresa</a></li>
        <li class="active" ><a href="../empresa/gerirEmpresa">Gerir Empresa</a></li>
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
<legend><h2>Lista Empresas</h2></legend>
<table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Numeração</h2></th>
      <th><h2>Nome da empresa</h2></th>
      <th><h2>Ação</h2></th>
  </tr>
<?php  foreach($aEmpresas as $key) { ?>  
  <tr>
    <td><b><?php echo $key['id_empresa'];?></b></td>  
    <td><b><?php echo $key['nome'];?></b></td>
    <td>  <a href="deletar/<?php echo $key['id_empresa']?>" >
          <span class="glyphicon glyphicon-remove-sign"> Remover</span></a>
          <b><a href="editar/<?php echo $key['id_empresa'] ?>">
          <span class="glyphicon glyphicon-pencil">Editar</span></a></b>
    </td>
  </tr>
 <?php } ?>
</table> 
</body>
</html>