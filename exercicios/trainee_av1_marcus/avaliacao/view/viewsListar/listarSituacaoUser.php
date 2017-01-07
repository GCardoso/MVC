<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listar Empresas</title>
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
      <a class="navbar-brand" href="<?php echo APP_ERROS."avaliacao/usuario/userpage"?>" >Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href= "<?php echo APP_ERROS."avaliacao/usuario/userpage" ?>">Home</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Listar Usuarios</a></li>
        <li><a href="../empresa/cadastro">Cadastro Empresa</a></li>
        <li><a href="../empresa/gerirEmpresa">Listar Empresa</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li class="active" ><a href="../situacao/gerenciarSituacao">Listar Situações</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Listar Cargo</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista de Situações</h2></legend>
<table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Numeração</h2></th>
      <th><h2>Nome da Situação</h2></th>
      <th><h2>Ação</h2></th>
  </tr>
<?php  foreach($aSituacao as $key) { ?>  
  <tr>
    <td><b><?php echo $key['id_situacao'];?></b></td>  
    <td><b><?php echo $key['nome'];?></b></td>
    <td><a href="deletar/<?php echo $key['id_situacao']?>">
        <span class="glyphicon glyphicon-remove-sign"> Remover</span></a>
          <b><a href="editar/<?php echo $key['id_situacao'] ?>">
        <span class="glyphicon glyphicon-pencil">Editar</span></a></b>
    </td>
  </tr>
  </tr>
 <?php } ?>
</table> 
</body>
</html>