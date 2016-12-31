<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 20:14
 */
include ('sessao.php');
sessao::start();
?>
<html>
<head>
    <title>Pagina Geral</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<nav class="navbar navbar-brand">
    <form method="get" action="geral.php">
    <button class="btn btn-info" type="submit" name="login" value="telalogin">Login</button>
    <button class="btn btn-info" type="submit" name="vertodos" value="vertodos">Vertodos </button>
    <button class="btn btn-info" type="submit" name="logados" value="logados">Todososlogados</button>
    <button class="btn btn-info" type="submit" name="deslogar" value="unico">Deslogar</button>
    <button class="btn btn-info" type="submit" name="deslogartodos" value="all">DeslogarTodos</button>
    </form>
</nav>
<table border="1" id="tabletodos">
    <caption>Todos cadastrados</caption>
    <tr>
        <th>Usuario</th>
        <th>Senha</th>
        <th>Status Logado</th>
    </tr>
<?php   if(isset($_GET['vertodos'])) {  $lista = sessao::buscar();  foreach ($lista as $todos) { ?>
    <tr>
        <td><?php  echo $todos['usuario']; ?> </td>
        <td><?php echo $todos['senha'];?> </td>
        <td><?php echo $todos['logado'];?> </td>
    </tr>
<?php } } ?>
</table>
<?php if(isset($_GET['login'])){  header('location:http://localhost/modulo_1/sessoes/login.php'); }?>

<table border="1" class="tablelogados">
	<caption>Todos Logados</caption>
	<tr>
		<th>Usuario</th>
		<th>Senha</th>
		<th>Status logado</th>
	</tr>
<?php if(isset($_GET['logados'])){ $logados = sessao::buscar();  foreach ($logados as $Todososlogados){  if($Todososlogados['logado'] == 'sim'){ ?>
	<tr>
        <td><?php  echo $Todososlogados['usuario']; ?> </td>
        <td><?php echo $Todososlogados['senha'];?> </td>
        <td><?php echo $Todososlogados['logado'];?> </td>
    </tr>
<?php } } }; ?>
</table>
<?php  if(isset($_GET['deslogartodos'])) {  sessao::stop(); header('location:http://localhost/exercicios/modulo_1/sessoes/login.php'); } ?>
<?php if(isset($_GET['deslogar'])) {  
      $Ultimologado= sessao::buscar();
      foreach ($Ultimologado as &$deslogando) {
      	   sessao::deslogarunico($deslogando['usuario']);
      	   break;
      }
      unset($Ultimologado);
	  header('location:http://localhost/exercicios/modulo_1/sessoes/login.php'); } ?>
</body>
</html>

