<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gereciando Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php'); ?>
<?php foreach ($aUsuario as $key) { ?>
 <div class="login-page">
  <div class="form">
    <legend><h1>Atualização de Cadastro<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo LOCAL."usuario/atualizar"?>">
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