<?php

abstract class AbstractController{

	private $POST = [];
	private $GET = [];
	private $FILES = [];

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