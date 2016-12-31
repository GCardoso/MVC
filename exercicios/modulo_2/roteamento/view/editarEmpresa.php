<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Editar Empresa</title>
	<link rel="stylesheet" type="text/css" href="/../exercicios/modulo_1/bootstrap/css/bootstrap.min.css">
</head>
<body>
   	<form method="post" action="../atualizar" class="col-md-6">
	<legend><h1>Cadastrar Empresa</h1></legend>
	<div class="form-group">
	<label>
	    Nome Fantasia
		<input type="text" name="nomeEmpresa" class="form-control" value= <?php echo $aEmpresa['nomeEmpresa']; ?>  required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
	    Email
		<input type="Email" name="email" class="form-control" required="required" value= <?php echo $aEmpresa['email']; ?>   >
	</label>
	</div>
	<div class="form-group">
       <label>
       	Razao Social
       	<input type="text" name="razaosocial" class="form-control" required="required"  value= <?php echo $aEmpresa['razao']; ?>  >
       </label>
    </div>
	<div class="form-group">
	<label>
		Cnpj
		<input type="text" name="cnpj" class="form-control" required="required"   value= <?php echo $aEmpresa['cnpj']; ?>>
	</label>
	</div>
	<div class="form-group">
	<label>
		Telefone
		<input type="text" name="telefone" class="form-control" required="required" value= <?php echo $aEmpresa['telefone']; ?> >
	</label>
	</div>
	<div class="form-group">
	  <label>
	  	<button type="submit" class="btn btn-success">Atualizar</button>
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