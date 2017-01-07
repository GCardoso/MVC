<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Empresas</title>
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
      <a class="navbar-brand" href="<?php echo APP_ERROS."avaliacao/usuario/adminpage"?>" >Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href= "<?php echo APP_ERROS."avaliacao/usuario/adminpage" ?>">Home</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/usuario/cadastrar"?>">Cadastro De Usuarios</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Gerir Usuarios</a></li>
        <li class="active"><a href="../empresa/cadastro">Cadastrar Empresa</a></li>
        <li ><a href="../empresa/gerirEmpresa">Gerir Empresa</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/gerenciarSituacao"?>">Gerir Situações</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargo</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargo</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<div class="login-page">
  <div class="form">
    <legend><h1>Cadastro de Empresa<h1></legend></br>
    <form class="login-form" method="post" action="registrar">
        <h4>Nome da empresa</h4>
        <input type="text" class="form-control" id="empresa" placeholder="Nome da Empresa" name="empresa"  required=""
         pattern="[a-zA-Z0-9]+" title="SOMENTE LETRAS e numeros">
        <button>Cadastrar</button>
    </form>
  </div>
</div>
</body>
</html>