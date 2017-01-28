<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include_once('view/viewsHead/cssCabecalhos.php');?>
   <?php include_once('view/viewsHead/scriptCabecalhos.php'); ?>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Usuario.js"?>"></script>
</head>
<body onload="AlertMsg(mensagem,'Bem vindo a Area de Cadastro de Usuarios')">
<?php include_once('view/viewsHead/menuAdm.php');?>
 <div class="login-page">
  <div class="form">
    <legend><h1>Área de Cadastro<h1></legend></br>
    <form class="login-form" method="post"  id="formulariUsuario">
        <h4>Login</h4>
        <input type="text" class="form-control" id="login" placeholder="Login" name="login"  required="">
        <h4>Senha</h4> 
        <input type="password" name="senha" class="form-control" id="password" placeholder="senha" required>
        <input type="radio" name="tipo"  value="1" checked > <h5> Administrador</h5>
        <input type="radio" name="tipo"  value="2"> <h5>Usuario Comun</h5>
        <button id="btn-Usuario-Cadastrar">Cadastrar</button>
    </form>
  </div>
</div>
</body>
</html>