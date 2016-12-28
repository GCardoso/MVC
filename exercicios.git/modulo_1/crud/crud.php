<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="cadastraempresa.php" class="col-md-6">
	<legend><h1> Cadastro de Empresa</h1></legend>
	<div class="form-group">
	<label>
	    Nome
		<input type="text" name="nome" class="form-control" placeholder="nome" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
	    Email
		<input type="email" name="email" class="form-control" placeholder="email" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
         Cnpj*
		<input type="text" name="cnpj" class="form-control" placeholder="Cnpj" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		CEP
		<input type="text" name="cep" class="form-control" placeholder="CEP" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Estado
		<input type="text" name="estado" class="form-control" placeholder="Estado" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Cidade
		<input type="text" name="cidade" class="form-control" placeholder="Cidade" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Bairro
		<input type="text" name="bairro" class="form-control" placeholder="Bairro" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Logradouro
		<input type="text" name="logradouro" class="form-control" placeholder="Logradouro" required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
		Telefone
		<input type="text" name="telefone" class="form-control" placeholder="Telefone" required="required">
	</label>
	<div>
	<div class="form-group">
	<label>
	 <button class="btn btn-success">cadastrar</button>
	 <a href="http://localhost/exercicios/modulo_1/crud/listagem.php" class="btn btn-info" role='button' > Lista de Empresas </a>
	</label>
	<div>
</form>
	

</body>
</html>