<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Empresas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php');?>
 <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Empresa.js"?>"></script>
</head>
<body onload="AlertMsg(mensagem,'Bem Vindo a Area da Empresa')" >
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
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