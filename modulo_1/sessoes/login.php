<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 16:11
 */

?>
<html>
<head>
    <title>
        Tela de Login
    </title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<form method="post"  action="validar.php">
    <legend class="h1">Form Login</legend>
    <div class="form-group">
    <label>
        Usuario:
        <input type="text" name="userLogin" placeholder="usuario" class="form-control">
    </label>
        </div>
        <div class="form-group">
    <label>
        Senha:
        <input type="password" name="password" placeholder="senha" class="form-control">
    </label>
            </div>
        <div class="form-group">
        <label>
            <input type="submit" value="logar" class="btn btn-danger">
        </label>
        </div>
</form>
</body>
</html>
