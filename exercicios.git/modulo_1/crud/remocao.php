<?php
include('../sessoes/sessao.php');
sessao::start();
sessao::deslogarunico($_GET['nome']);
header('location:http://localhost/exercicios/modulo_1/crud/listagem.php');

?>