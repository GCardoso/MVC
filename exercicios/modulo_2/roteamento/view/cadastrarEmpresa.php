<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Empresa</title>
	<link rel="stylesheet" type="text/css" href="/../exercicios/modulo_1/bootstrap/css/bootstrap.min.css">
</head>
<body>
		<form method="post" action="salvar" class="col-md-6">
			<legend><h1>Cadastrar Empresa</h1></legend>
		<div class="form-group">
			<label>
			    Nome Fantasia
				<input type="text" name="nomeEmpresa" class="form-control"  required="required">
			</label>
		</div>
		<div class="form-group">
			<label>
			    Email
				<input type="Email" name="email" class="form-control" required="required">
			</label>
		</div>
		<div class="form-group">
		       <label>
		       	Razao Social
		       	<input type="text" name="razaosocial" class="form-control" required="required">
		       </label>
	    </div>
		<div class="form-group">
			<label>
				Cnpj
				<input type="text" name="cnpj" class="form-control" required="required">
			</label>
		</div>
		<div class="form-group">
			<label>
				Telefone
				<input type="text" name="telefone" class="form-control" required="required">
			</label>
		</div>
		<div class="form-group">
			  <label>
			  	<button type="submit" class="btn btn-success">Cadastrar</button>
			  	<a class="btn btn-info" role='button' href="listar">Lista de Empresas</a>
			  </label>
		<div>
		<div class="form-group">
			  <label>
			  	<a class="btn btn-default" role='button' href="../empresa/">voltar</a>
			  </label>
		<div>
</form>
</body>
</html>