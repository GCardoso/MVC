<?php
include('../sessoes/sessao.php');
sessao::start();

$identificador=$_GET['nome'];
$todasempresas=sessao::buscar();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela de Editar</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="editarempresa.php" class="col-md-6"> 

	<?php if($todasempresas!=null){ ?>

 	<?php	foreach ($todasempresas as &$empresa) {  ?>

	<?php	if($empresa['nome']== $identificador){ ?>

	<legend><h1>Editar empresa</h1></legend>
	<div class="form-group">
	<label>
	    Nome
		<input type="text" name="nome" class="form-control" value = <?php echo $empresa['nome'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
	    Email
		<input type="email" name="email" class="form-control" value  = <?php  echo $empresa['email'] ?>  required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
         Cnpj*
		<input type="text" name="cnpj" class="form-control" value = <?php  echo $empresa['cnpj'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		CEP
		<input type="text" name="cep" class="form-control" value = <?php  echo $empresa['cep'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Estado
		<input type="text" name="estado" class="form-control" value= <?php  echo $empresa['estado'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Cidade
		<input type="text" name="cidade" class="form-control" value = <?php  echo $empresa['cidade'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Bairro
		<input type="text" name="bairro" class="form-control"  value = <?php  echo $empresa['bairro'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Logradouro
		<input type="text" name="logradouro" class="form-control" value = <?php  echo $empresa['logradouro'] ?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Telefone
		<input type="text" name="telefone" class="form-control"  value = <?php  echo $empresa['telefone'] ?> required="required">
	</label>
	<div>
	<div class="form-group">
	<label>
	 <button class="btn btn-success" type="submit" >Atualizar</button>
	 <a href="http://localhost/exercicios/modulo_1/crud/listagem.php"  class="btn btn-info" role="button" >Voltar</a>
	</label>
	<div>
</form>
<?php  } } } ?>
</body>
</html>		