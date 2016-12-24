<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 24/12/2016
 * Time: 13:12
 */
$snome= $_POST['nome'];
$ssenha=$_POST['senha'];

if($ssenha!="moobitech"){
   echo "<script>alert('Senha invalida');window.location='http://localhost/modulo_1/navegacao/curriculo.php'</script>";
}else{
    $_SESSION['nome']=$snome;
    $_SESSION['senha']=$ssenha;
    header('location:http://localhost/modulo_1/navegacao/index.php');
}
