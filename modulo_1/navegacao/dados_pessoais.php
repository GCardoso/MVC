<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 24/12/2016
 * Time: 11:36
 */
include ('pessoa.php');
$nome=$_GET['nome'];
var_dump($nome);
pessoa::getInstance()->setSnome($nome);
?>
<html>
<head>
    <title>Dados_pessoais</title>
</head>
<body>
<h1>Nome da primeira pagina é: <?php echo pessoa::getInstance()->getSnome(); ?> </h1>
<form method="post" action="curriculo.php">
    <fieldset>
        <legend>Inserção de tres dados</legend>
        <label>
            Digite seu usuario:
            <input type="text" name="usuario">
        </label>
        <label>
            Digite seu cpf:
            <input type="text" name="cpf">
        </label>
        <label>
            Digite sua senha:
            <input type="password" name="senha">
        </label>
        <label>
            <input type="hidden"  name="sname" value=<?php echo $nome ;?> >
        </label>
        <label>
            <input type="submit" value="cadastrar">
        </label>
    </fieldset>
</form>
</body>
</html>
