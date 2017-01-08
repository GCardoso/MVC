<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/help.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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