<?php 

define("CAMINHOS","../../../");
include_once(CAMINHOS.'exercicios/modulo_1/sessoes/sessao.php');
include_once('model/Usuario.php');

class Login {

	//Metodo responsavel por  verificar se ja existe  alguem logado.
	public static function validarAcesso () {
		
		return isset($_SESSION['logado']);
	}

	// Metodo responsavel por verifica  possui algum usuario no array do Json.
	public static function autenticar($sUsuario,$sSenha) {
		$aJson = Usuario::listar();

		foreach ($aJson as $key) {
			 if($key['login'] == $sUsuario && $key['senha'] == $sSenha  && $key['administrador'] == true) {
			 	$_SESSION['logado'] = $sUsuario;
			 	$_SESSION['time'] = date('h:i:s',time());
			 	$_SESSION['administrador'] = $key['administrador'];
			 	return true;
			 }
		}
		return false;
	}

}