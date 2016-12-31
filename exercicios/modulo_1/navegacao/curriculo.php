<!DOCTYPE html>
<html>
<head>
	<title>Dados_pessoas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jsquery-easing/1.3/jquery.easing.min.js'></script>
  <script src='js/jquery-2.2.4.js' ></script>
  <script src='js/jqBootstrapValidation.js '> </script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="page-header">
  <h1> Elemento da primeira pagina: <?php if(isset($_POST['dado'])){ echo $_POST['dado']; } ?></h1>
</div>
<h2>Dados da Segunda Tela</h2>
<div class="col-md-2">
<table border="1" class="table table-bordered">
  <tr>
  <th>Nome</th>	
  <th>Cpf</th>
  <th>RG</th>
  </tr>
  <tr>
  <td><?php if(isset($_POST['nome'])){echo $_POST['nome'];}?> </td>

  <td><?php if(isset($_POST['cpf'])){echo $_POST['cpf'];}?>  </td>
  <td><?php if(isset($_POST['rg'])){echo $_POST['rg'];}?> </td>
  </tr>
</table>
<form method="post" action="registro.php">
  <fieldset>
     <legend>Tela de Login</legend>
	<div class="form-group md-4">
		<label for="cpf">Digite seu cpf:</label>
		<input type="text" class="form-control"  name="cpf" required="required">
   	</div>

   	<div class="form-group md-6">
		<label for="senha">Digite Sua Senha:</label>
		<input type="password" class="form-control"  name="senha" required="required">
   	</div>
   	<div>
     <button class="btn btn-default" value="Logar">Logar</button>
   	</div>
   	</fieldset>
</form>
</div>
</body>
</html>