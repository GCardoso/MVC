<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../public/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../css/help.css">
  <link rel="stylesheet" type="text/css" href="../../css/menu.css">
</head>
<body style="height:1500px">
<ul >
    <li  ><a href="../../usuario/adminpage">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="../../login/sair">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Usuario</a>
        <div class="dropdown1-content">
            <a href="../../usuario/cadastrar">Cadastro De Usuarios</a>
            <a href="../../usuario/gerenciarUsuarios">Gerir Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Empresa</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."empresa/cadastro"?>">Cadastrar Empresa</a>
            <a href="<?php echo APP_ERROS."empresa/gerirempresa"?>">Gerir Empresa</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Situação</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."situacao/cadastrar"?>">Cadastrar Situação</a>
            <a href="<?php echo APP_ERROS."situacao/gerenciarSituacao"?>">Gerir Situações</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Cargos</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
</ul>
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