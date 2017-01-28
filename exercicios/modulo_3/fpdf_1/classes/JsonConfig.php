<?php

 class JSONConfig {
	
	public static $aConfig;

	
	public static function setJson($sPath = 'ambiente.json') {
		if(self::$aConfig != null) 
			return;
		
		self::$aConfig = json_decode(file_get_contents($sPath),true);
	}

	public static function getJson() {
		self::setJson();
		return self::$aConfig;
	}

	public static function getValue($chave) {
		$json = self::getJson();
		return $json[$chave];
	}


	public static function setvalue($chave,$Value) {
		// $json = self::getJson();
		//  json_encode(file_put_contents('ambiente.json',$Value));
	}

}

