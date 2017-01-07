<?php 

include_once('controller/AbstractController.php');
include_once('model/Usuario.php');

class LoginController extends AbstractController {


	// Construct sobrescrito ,Quando sobrescrevemos o metodo construtor  a função dentro do contstrutor do pai nao é chamado. 
	function __construct () {} 

	function entrar () {
		require "view/login.php";
	}

	function sair(){
		session_destroy();
		
		header('location:'.APP_ROOT.'login/entrar');
	}

	function paginaInicial () {
        require "view/paginaInicial.php";

	}

	public function logar() {
		if (empty($_POST['nome']) || empty($_POST['senha'])) {
			header('location:'.APP_ROOT.'login/entrar');
		}

		$bResultado = Login::autenticar($_POST['nome'],$_POST['senha']);
		if($bResultado) {
			header('location:'.APP_ROOT.'usuario/paginainicial');
		} else {
			header('location:'.APP_ROOT.'login/entrar');
		}
	}
}


//#Entendendo a estrutura MVCC
//Model - dados
//View - visualização dos dados
//Controller - ações do usuario 
//Classes - regras de negócio