<?php 

include_once('model/Usuario.php');

class Login {


	public static function validarAcesso () {
		
		return Sessao::getsessao('logado');
	}

	public static function autenticar($sUsuario,$sSenha) {
		
		$aAll = Usuario::listar();
		foreach ($aAll as $key) {
			 if($key['login'] == $sUsuario && $key['senha'] == $sSenha) {
			 	Sessao::setsessao('logado',$sUsuario);
			 	Sessao::setsessao('time',date('h:i:s'));
			 	Sessao::setsessao('id_perfil',$key['id_perfil']); 
			 	return true;
			 }
		}
		return false;
	}

}
