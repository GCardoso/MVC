<?php 

include_once('controller/AbstractController.php');
include_once('model/Usuario.php');

class LoginController extends AbstractController {
	// Construct sobrescrito ,Quando sobrescrevemos o metodo construtor  a função dentro do contstrutor do pai nao é chamado. 
	function __construct () {} 

	function entrar () {
			if(Sessao::hasSessao()){
				require_once "view/login.php";
			}else {
				require "view/paginaInicial.php";
			}
	}

	function sair(){
		Sessao::stop();
		header('location:'.LOCAL.'login/entrar');
	}

	function paginaInicial () {
        require "view/paginaInicial.php";

	}

	public function logar() {
		if (empty($this->post('nome')) || empty($this->post('senha'))) {
			header('location:'.LOCAL.'login/entrar');
		}

		$bResultado = Login::autenticar($this->post('nome'),$this->post('senha'));
		if($bResultado) {
			// header('location:'.LOCAL.'usuario/definiracesso');
			$url = LOCAL.'usuario/definiracesso';
			header("refresh:2;url={$url}");
			require "view/alertas/loginsuccess.php";
		} else {
			// header('location:'.LOCAL.'login/entrar');
			$url = LOCAL."login/entrar";
			header("refresh:2;url={$url}");
			require "view/alertas/loginfail.php";
		}
	}
}
