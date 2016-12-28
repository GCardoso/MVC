<?php

include('../sessoes/sessao.php');
sessao::start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Empresas</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="text/css" href="../sessoes/estilo.css">
</head>
<body>
 <div >
     <a  href="http://localhost/exercicios/modulo_1/crud/crud.php"  class="btn btn-success"  role="button">Voltar</a>
   <div> 
<form method="post" action="acao.php">
<table border="1" class="col-md-3">
   <caption><h1>Lista de Empresas</h1></caption>
    <tr>
    <th>Nome</th>
    <th>Cnpj</th>
    <th>Edição ou remoção</th>	
    </tr>
<?php $empresa = sessao::buscar();?>
<?php if($empresa != null){ 
		$i =0 ;
		foreach($empresa as $cliente) { 
		
?>
      <tr>	 
   	  <td><?php echo $cliente['nome'];?> </td>
      <td><?php echo $cliente['cnpj'];?></td>
      <td>
      	  <a  href="http://localhost/exercicios/modulo_1/crud/remocao.php?nome=<?php echo $cliente['nome'];?>">
      	  <span class="glyphicon glyphicon-remove-sign"> Remover</span></a>
          <a  href="http://localhost/exercicios/modulo_1/crud/edicao.php?nome=<?php echo $cliente['nome'];?>">
          <span class="glyphicon glyphicon-pencil">Editar</span>  </a>
       </td>   
      </tr>
<?php $i++; } }?>
</table> 
</form>
</body>
</html> 
	