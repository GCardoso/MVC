<?php

 class JSONConfig {
	
	public static $aConfig;

	
	public static function setJson ($sPath) {
		self::$aConfig = json_decode(file_get_contents($sPath),true);
	}

	public static function getJson () {
		return self::$aConfig;
	}

}
