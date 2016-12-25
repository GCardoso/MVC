<?php
/*
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 15:35
 */

?>

<html>
<head>
    <title>Cadastro</title>
</head>
<body>
<form method="post" action="registrosessoes.php">
    <fieldset>
        <legend>Cadastro</legend>
        <label>
            Nome:
            <input type="text" name="snome">
        </label>
        <label>
            Usuario:
            <input type="text" name="usuario">
        </label>
        <label>
            Senha:
            <input type="password" name="senha">
        </label>
        <label>
            <input type="submit" value="cadastrar">
        </label>
    </fieldset>
    <label>
        <a href="login.php">Ir pagina do Login</a>
    </label>
</form>
</body>
</html>
