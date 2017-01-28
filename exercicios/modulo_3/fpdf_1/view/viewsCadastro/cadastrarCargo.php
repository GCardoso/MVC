<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Cargos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php  include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body onload="AlertMsg(mensagem,'Bem vindo Área de Cargos')">
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
<div class="login-page">
  <div class="form">
    <legend><h1>Cadastro de Cargo<h1></legend></br>
    <form class="login-form" method="post" action="registrar">
        <h4>Nome da Cargo</h4>
        <input type="text" class="form-control" id="cargo" placeholder="Nome do Cargo" name="cargo"  required="" 
         pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
        <button>Cadastrar</button>
    </form>
  </div>
</div>
</body>
</html>