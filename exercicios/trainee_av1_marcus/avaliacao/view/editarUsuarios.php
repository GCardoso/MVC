<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/help.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../usuario/adminpage">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="../../usuario/adminpage">Home</a></li>
        <li><a href="../../usuario/cadastrar">Cadastro De Usuarios</a></li>
        <li class="active" ><a href="../../usuario/gerenciarUsuarios">Gerir Usuarios</a>
        <li><a href="#">Cadastrar Empresa</a></li>
        <li><a href="../empresa/gerirEmpresa">Gerir Empresa</a></li>
        <li ><a href="<?php echo APP_ERROS."situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargo</a></li>
        <li><a href="../../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<?php foreach ($aUsuario as $key) { ?>
 <div class="login-page">
  <div class="form">
    <legend><h1>Atualização de Cadastro<h1></legend></br>
    <form class="login-form" method="post" action="../../usuario/atualizar">
        <h4>Login</h4>
        <input type="text" value= <?php echo $key['login']; ?> readonly name="login" />
        <h4>Senha</h4>
        <input type="text" value= <?php echo $key['senha'] ?> name="senha" />
        <h4>Id Usuario</h4>
        <input type="text" name="id_user" value= <?php echo $key['id_user']?> readonly />
        <input type="radio" name="tipo"  value="1" checked > <h5>Administrador</h5>
        <input type="radio" name="tipo"  value="2"> <h5>Usuario Comun</h5>
        <button>Atualizar</button>
    </form>
  </div>
</div>
<?php unset($key); } ?>
</body>
</html>