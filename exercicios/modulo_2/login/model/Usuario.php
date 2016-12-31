<?php 

include_once(CAMINHOS.'exercicios/modulo_1/sessoes/sessao.php');

class Usuario {

	public static function listar() {
		return json_decode(file_get_contents('u.json'),true);
	}


	//Salvando dados no arquivo u.Json;
	public static function salvar ($aDados) {
        $fp = fopen('u.json','a');
        fwrite($fp,json_encode($aDados));
        fclose($fp);
    }
}