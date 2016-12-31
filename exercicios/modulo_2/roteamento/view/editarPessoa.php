<!DOCTYPE html>
<html lang="Pessoa">
<head>
	<meta charset="UTF-8">
	<title>Editar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="/../exercicios/modulo_1/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<form method="post" action="../atualizar" class="col-md-6">
	<legend><h1>Cadastrar Pessoa</h1></legend>
	<div class="form-group">
	<label>
	    Nome
		<input type="text" name="nome" class="form-control"  value = <?php echo $aPessoa['nome'];?> required="required">
	</label>
	</div>
	<div class="form-group">
	<label>
	    Data nascimento
		<input type="date" name="data" class="form-control" value= <?php echo $aPessoa['datanascimento'];?> required="required">
	</label>
	</div>
	<div class="form-group">
       <label>
       	Idade
       	<input type="text" name="idade" class="form-control" value= <?php echo $aPessoa['idade'];?> required="required">
       </label>
    </div>
	<div class="form-group">
	<label>
		Cpf
		<input type="text" name="cpf" class="form-control" value= <?php echo $aPessoa['cpf'];?>  >
	</label>
	</div>
	<div class="form-group">
	  <label>
	  	<button type="submit" class="btn btn-success">Atualizar</button>
	  	 <a class="btn btn-default" href="../listar" role='button'>voltar</a>
	  </label>
	<div>
	
</form>
	
</body>
</html>