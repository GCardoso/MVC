<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 20:14
 */
include ('sessao.php');
sessao::start();
echo "Pagina Geral<br>";
$lista = sessao::buscar();

foreach ($lista as $todos){
    echo "usuario:".$todos['usuario']."<br>";
    echo "senha:".$todos['senha']."<br>";
}
?>

