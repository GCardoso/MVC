<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gerir Empresas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
   <?php  include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
<?php foreach($aEmpresa as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro de Empresa<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo LOCAL."empresa/atualizar"?>">
        <h4>Nome da empresa</h4>
        <input type="text" class="form-control" id="empresa" value=<?php echo  $key['nome'];?> name="empresa"  required=""
        pattern="[a-zA-Z0-9]+" title="SOMENTE LETRAS E NUMEROS">
        <input type="hidden" name="id_empresa" value=<?php echo $key['id_empresa'];?> />
        <button>Atualizar</button>
         </form>
      </div>
    </div>
<?php } ?>    
</body>
</html>