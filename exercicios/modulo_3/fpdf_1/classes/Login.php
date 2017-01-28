<?php 

include_once('model/Usuario.php');

class Login {


	public static function validarAcesso () {
		
		return Sessao::getsessao('logado');
	}

	public static function autenticar($sUsuario,$sSenha) {
		
		$aUsuario = array('login'=> $sUsuario ,'senha'=>$sSenha);
		$aLogado = Usuario::logarUsuario($aUsuario);
		foreach ($aLogado as $key) {
			 if($key['login'] == $sUsuario && $key['senha'] == md5($sSenha)) {
			 	Sessao::setsessao('logado',$sUsuario);
			 	Sessao::setsessao('time',date('h:i:s'));
			 	Sessao::setsessao('id_perfil',$key['id_perfil']); 
			 	return true;
			 }
		}
		return false;
	}

}
