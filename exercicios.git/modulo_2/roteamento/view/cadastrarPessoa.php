<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Pessoa</title>
	<link rel="stylesheet" type="text/css" href="/../exercicios.git/modulo_1/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<form method="post" action="salvar" class="col-md-6">
	<legend><h1>Editar empresa</h1></legend>
	<div class="form-group">
	<label>
	    Nome
		<input type="text" name="nome" class="form-control"  required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
	    Data nascimento
		<input type="Data" name="data" class="form-control" required="required">
	</label>
	</div>
	<div class="form-group">
       <label>
       	Idade
       	<input type="text" name="idade" class="form-control" required="required">
       </label>
    </div>
	<div class="form-group">
	<label>
		Cpf
		<input type="text" name="cpf" class="form-control" required="required">
	</label>
	</div>
	<div class="form-group">
	  <label>
	  	<button type="submit">Cadastrar</button>
	  </label>
	<div>

</form>
</body>
</html>