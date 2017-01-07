<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Situacoes</title>
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
      <a class="navbar-brand" href="<?php echo APP_ERROS."avaliacao/usuario/userpage"?>" >Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href= "<?php echo APP_ERROS."avaliacao/usuario/userpage" ?>">Home</a></li>
        <li><a href="./../usuario/gerenciarUsuarios">Listar Usuarios</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/empresa/cadastro"?>">Cadastrar Empresa</a></li>
        <li ><a href="../empresa/gerirEmpresa">Listar Empresa</a></li>
        <li class="active"><a href="../situacao/cadastrar">Cadastrar Situação</a></li>
        <li><a href="../situacao/gerenciarSituacao">Listar Situações</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargo</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Listar Cargo</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<div class="login-page">
  <div class="form">
    <legend><h1>Cadastro Situação<h1></legend></br>
    <form class="login-form" method="post" action="registrar">
        <h4>Nome da Situacao</h4>
        <input type="text" class="form-control" id="situacao" placeholder="Situacao do Funcionario" name="situacao"  required="" pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
        <button>Cadastrar</button>
    </form>
  </div>
</div>
</body>
</html>