<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 15:40
 */
include ('sessao.php');
sessao::start();
$listaUsuarios = array('nome'=> $_POST['snome'],'usuario'=> $_POST['usuario'],'senha'=> $_POST['senha'],'logado'=>'nao');
sessao::setsessao($_POST['usuario'],$listaUsuarios);
header('location:http://localhost/exercicios/modulo_1/sessoes/cadastro.php');
