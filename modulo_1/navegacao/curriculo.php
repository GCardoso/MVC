<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 24/12/2016
 * Time: 11:56
 */
include ('pessoa.php');
if(isset($_POST['usuario']) && isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['sname']) ){
    pessoa::getInstance()->setUsuario($_POST['usuario']);
    pessoa::getInstance()->setScpf($_POST['cpf']);
    pessoa::getInstance()->setSsenha($_POST['senha']);
    pessoa::getInstance()->setSnome($_POST['sname']);
}
?>
<html>
<head>
    <title>Curriculo</title>
</head>
    <body>
     <table border="1">
         <caption>Dados das paginas anteriores</caption>
         <tr>
         <th>Nome</th>
          <th>Usuario</th>
          <th>Cpf</th>
          <th>senha</th>
         </tr>
         <tr>
             <td><?php echo pessoa::getInstance()->getSnome();  ?></td>
             <td><?php echo pessoa::getInstance()->getUsuario();?></td>
             <td><?php echo pessoa::getInstance()->getScpf();   ?></td>
             <td><?php echo pessoa::getInstance()->getSsenha(); ?></td>
         </tr>
     </table>
    <form method="post" action="registro.php">
        <fieldset>
            <legend>Form Login</legend>
            <label>
                Digite usuario:
                <input type="text" name="usuario">
            </label>
            <label>
                Digite senha:
                <input type="password" name="senha">
            </label>
            <label>
                <input type="submit" value="logar">
            </label>
        </fieldset>
    </form>
    </body>
</html>
