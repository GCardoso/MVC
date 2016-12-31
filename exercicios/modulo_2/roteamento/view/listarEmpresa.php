<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Lista Empresa</title>
		<link rel="stylesheet" type="text/css" href="/../exercicios/modulo_1/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css"  href="/../exercicios/modulo_1/bootstrap/css/formato.css">
</head>
<body>
	<caption><h1>Lista de Empresa</h1></caption>
	<table class="table-bordered col-md-5">
		<tr>
			<th>Nome da Empresa</th>
			<th>CNPJ</th>
			<th>Funções</th>
		</tr>
		<?php  foreach ( $aEmpresa as &$chave) {  ?>

       	<?php if(isset($chave['nomeEmpresa']) && isset($chave['cnpj'])) {?>
	    <tr align="center">
		<td><?php echo $chave['nomeEmpresa']; ?> </td>     
		<td><?php echo $chave['cnpj'] ;?> </td>
		<td> 
		     <a href="remover/<?php echo $chave['cnpj']?>"<span class="glyphicon glyphicon-remove-circle">Remover</span></a> 
		     <a href="editar/<?php echo $chave['cnpj']?>"><span class="glyphicon glyphicon-pencil" >Editar</span></a></td>
		</tr>	
		<?php }
		unset($chave);	
		}?>
	</table>
		<a  id="links"  href="../empresa" role="button" class="btn btn-default" >Voltar</a>
</body>
</html>