<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 20:20
 */
include ('sessao.php');
sessao::start();

$bresultado = sessao::autenticar($_POST['userLogin'],$_POST['password']);

if($bresultado != true){
    echo "<script>alert('login ou senha invalido');window.location='http://localhost/modulo_1/sessoes/login.php'</script>";
} else {
    header('location:http://localhost/exercicios/modulo_1/sessoes/geral.php');
}
