<?php

include_once(CONSTANTES);

class Avisos {

	public static $sAviso;
	public static $iFormato;


	public static function setAviso($sMensagem) {
		 self::$sAviso = $sMensagem;
	}

	public static function setformato($iTipo) {
		 self::$iFormato = $iTipo;
	}

}