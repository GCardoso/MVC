<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/help.css">
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
        <li class="active"><a href="cadastrar">Cadastro De Usuarios</a></li>
        <li><a href="gerenciarUsuarios">Gerir Usuarios</a></li>
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
<br><br><br><br>
<!-- <h1 align="center"> Área de Cadastro </h1> -->
<!-- <form class="form col-md-4" method="post" action="salvar" >
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" placeholder="Login" name="login"  required="">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="senha" class="form-control" id="password" placeholder="Password" required>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="tipo"  value="1" checked > Administrador
      <br><input type="radio" name="tipo"  value="2"> Usuario Comun
    </label>
  </div>
  <button type="submit" class="btn btn-default">Cadastrar</button>
</form> -->
 <div class="login-page">
  <div class="form">
    <legend><h1>Área de Cadastro<h1></legend></br>
    <form class="login-form" method="post" action="salvar">
        <h4>Login</h4>
        <input type="text" class="form-control" id="login" placeholder="Login" name="login"  required="">
        <h4>Senha</h4> 
        <input type="password" name="senha" class="form-control" id="password" placeholder="senha" required>
        <input type="radio" name="tipo"  value="1" checked > <h5> Administrador</h5>
        <input type="radio" name="tipo"  value="2"> <h5>Usuario Comun</h5>
        <button>Cadastrar</button>
    </form>
  </div>
</div>
</body>
</html>