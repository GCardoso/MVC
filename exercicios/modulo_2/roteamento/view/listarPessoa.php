<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Lista de pessoas</title>
	<link rel="stylesheet" type="text/css" href="/../exercicios/modulo_1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="/../exercicios/modulo_1/bootstrap/css/formato.css">
</head>
<body>
    <caption><h1>Lista de Pessoas</h1></caption>
	<table class="table-bordered col-md-5">
		<tr>
			<th>Nome</th>
			<th>Cpf</th>
			<th>Funções</th>
		</tr>
		<?php  foreach ($aPessoa as &$key) {  ?>

       <?php if(isset($key['nome']) && isset($key['cpf'])) {?>
	    <tr align="center">
		<td><?php echo $key['nome']; ?> </td>     
		<td><?php echo $key['cpf'] ?> </td>
		<td> 
		     <a href="remover/<?php echo $key['cpf']?>" <span class="glyphicon glyphicon-remove-circle">Remover</span></a> 
		     <a href="editar/<?php echo $key['cpf']?>" <span class="glyphicon glyphicon-pencil" >Editar</span></a></td>
		</tr>	
		<?php } 
		unset($key);
		} ?>
	</table>
		<a  id="links"  href="../pessoa" role="button" class="btn btn-default" >Voltar</a>
</html>


