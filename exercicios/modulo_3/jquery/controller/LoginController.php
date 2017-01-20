<?php 

include_once('controller/AbstractController.php');
include_once('model/Usuario.php');
include_once(AVISOS);

class LoginController extends AbstractController {
	// Construct sobrescrito ,Quando sobrescrevemos o metodo construtor  a função dentro do contstrutor do pai nao é chamado. 
	function __construct () {} 

	function entrar () {
			require "view/login.php";
	}

	function sair(){
		// Sessao::limpar('logado');
		// Sessao::limpar('time');
		// Sessao::limpar('id_perfil');
		Sessao::stop();
		header('location:'.LOCAL.'login/entrar');
	}

	function paginaInicial () {
        require "view/paginaInicial.php";

	}

	public function logar() {
		if (empty($_POST['nome']) || empty($_POST['senha'])) {
			header('location:'.LOCAL.'login/entrar');
		}

		$bResultado = Login::autenticar($_POST['nome'],$_POST['senha']);
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
