<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Situação</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/help.css">
  <link rel="stylesheet" type="text/css" href="../../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<ul>
    <li><a href="<?php echo APP_ERROS."usuario/userpage" ?>">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="../login/sair">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Usuario</a>
        <div class="dropdown1-content">
            <a href="../<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Listar Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Empresa</a>
        <div class="dropdown1-content">
            <a href="../../empresa/cadastro">Cadastrar Empresa</a>
            <a href="../empresa/gerirEmpresa">Gerir Empresa</a>
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
            <a href="<?php echo APP_ERROS."cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo APP_ERROS."cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
</ul>
<br>
<?php foreach($aCargo as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro do Cargo<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo APP_ERROS."cargo/atualizar"?>">
        <h4>Nome do Cargo</h4>
        <input type="text" class="form-control" id="cargo" value=<?php echo  $key['nome'];?> name="nome"  required=""
        pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
        <input type="hidden" name="id_cargo" value=<?php echo $key['id_cargo'];?> />
        <button>Atualizar</button>
         </form>
      </div>
    </div>
<?php } ?>    
</body>
</html>