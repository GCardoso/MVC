<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Situação</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php  include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuUser.php');?>
<br>
<?php foreach($aCargo as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro do Cargo<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo LOCAL."cargo/atualizar"?>">
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