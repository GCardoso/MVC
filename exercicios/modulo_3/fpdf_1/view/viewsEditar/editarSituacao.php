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
<?php include_once('view/viewsHead/menuAdm.php');?>
<?php foreach($aSituacao as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro de Situação<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo LOCAL."situacao/atualizar"?>">
        <h4>Nome da Situação</h4>
        <input type="text" class="form-control" id="nome" value=<?php echo  $key['nome'];?> name="nome"  required=""
        pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
        <input type="hidden" name="id_situacao" value=<?php echo $key['id_situacao'];?> />
        <button>Atualizar</button>
         </form>
      </div>
    </div>
<?php } ?>    
</body>
</html>