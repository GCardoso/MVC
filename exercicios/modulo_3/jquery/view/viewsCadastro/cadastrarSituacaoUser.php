<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Situacoes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
   <?php include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
 <?php include_once('view/viewsHead/menuUser.php');?>
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