<?php

$nome= $_GET['dado'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Nome do Usuario Passado na Pagina anterior é : <?php  echo $nome; ?> </h1>
<form method="Post" action="curriculo.php">
    <fieldset>
	<legend>Inserção de 3 dados</legend>
    <label>
    	Nome:
    	<input type="text" name="nome">
    </label>
    <label>
    	Cpf:
    	<input type="text" name="cpf">
    </label>
    <label>
    	Rg:
    	<input type="text" name="rg">
    </label>
    <label>
    	<input type="submit" value="avançar">
    </label>
    </fieldset>
    <input type="hidden" name="dado"  value=<?php echo $nome ?>>
</form>
</body>
</html>