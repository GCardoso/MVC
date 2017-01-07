<?php 

include_once('controller/AbstractController.php');
include_once('model/Usuario.php');

class UsuarioController extends AbstractController {


	function login () {
		require "view/login.php";
	}

	function paginaInicial () {
        require "view/paginaInicial.php";
	}


	function cadastro () {
        $aDados = array('login' => $_POST['nome'],'senha' => $_POST['senha'],
                 'adminstrador' => $_POST['tipo']);
        $bResultado = Usuario::salvar($aDados);
        if(!$bResultado) {
            echo "<script>alert('Nao possivel cadastrar'); window.location = 
           'http://localhost/exercicios/modulo_2/login/usuario/paginainicial' </script>";
        }
            header('location:'.APP_ROOT.'usuario/cadastrar');
    }


     function cadastrar () {
        require 'view/cadastrar.php';
    }

    function listar () {
        $aUsers = Usuario::listar();
        require 'view/listaUsuarios.php';
    }
}
