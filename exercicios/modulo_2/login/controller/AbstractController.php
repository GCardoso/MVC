<?php

require_once 'classes/Login.php';

abstract class AbstractController{

	private $POST = [];
	private $GET = [];
	private $FILES = [];

	//Ao chamar o construtor das classes que herdam ,ira chamar o metodo do pai.
	public function __construct () {
      	$bResult = Login::validarAcesso();

		if(!$bResult){
			header('location:'.APP_ROOT.'login/entrar');
		}
	}	

	public function setGetData($aData){
		foreach($aData as $key => $value){
			$this->GET[$key] = $value;
		}
	}

	public function setPostData($aData){
		foreach($aData as $key => $value){
			$this->POST[$key] = $value;
		}
	}

	public function setFilesData($aData){
		foreach($aData as $key => $value){
			$this->FILES[$key] = $value;
		}
	}
	
	public function get($sKey){
		return $this->GET[$sKey];
	}
	
	public function post($sKey){
		return $this->POST[$sKey];
	}

	public function files($sKey){
		return $this->FILES[$sKey];
	}

}