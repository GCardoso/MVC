<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Situacoes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/help.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<ul>
    <li><a href="<?php echo APP_ERROS."avaliacao/usuario/userpage" ?>">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="../login/sair">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Usuario</a>
        <div class="dropdown1-content">
            <a href="./../usuario/gerenciarUsuarios">Listar Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Empresa</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."avaliacao/empresa/cadastro"?>">Cadastrar Empresa</a>
            <a href="../empresa/gerirEmpresa">Gerir Empresa</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Situação</a>
        <div class="dropdown1-content">
            <a href="../situacao/cadastrar">Cadastrar Situação</a>
            <a href="../situacao/gerenciarSituacao">Gerir Situações</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Cargos</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
</ul>
<br>
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