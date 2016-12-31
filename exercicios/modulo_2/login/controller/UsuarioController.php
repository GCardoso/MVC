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
}
